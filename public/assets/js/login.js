$('#login_site').on("click", function () {
    $(".login-pop-up, .hide-content").fadeIn("fast")
})
$('.hide-content, .ant-modal-close-x').on("click", function () {
    $(".login-pop-up, .hide-content").fadeOut("fast")
})

$("#login_with_email").on("click", async function () {
    let email = $("#email").val()
    $('.page-loader').fadeIn().css('display', "flex")
    try {
        const response = await axios.post(`/send-vcerify-email`, {
            email: email,
        },
        );
        if (response.data.status === true) {
            document.getElementById('errors').innerHTML = ''
            let error = document.createElement('div')
            error.classList = 'success'
            error.innerHTML = response.data.message
            document.getElementById('errors').append(error)
            $('#errors').fadeIn('slow')
            $(".login-pop-up").fadeOut("fast")
            $(".verify-pop-up").fadeIn("fast")
            $(".email-span").text(email)
            setTimeout(() => {
                $('.page-loader').fadeOut()
                $('#errors').fadeOut('slow')
            }, 1300);
        } else {
            $('.page-loader').fadeOut()
            document.getElementById('errors').innerHTML = ''
            $.each(response.data.errors, function (key, value) {
                let error = document.createElement('div')
                error.classList = 'error'
                error.innerHTML = value
                document.getElementById('errors').append(error)
            });
            $('#errors').fadeIn('slow')
            $('form input').css('outline', '2px solid #e41749')
            setTimeout(() => {
                $('input').css('outline', 'none')
                $('#errors').fadeOut('slow')
            }, 5000);
        }

    } catch (error) {
        document.getElementById('errors').innerHTML = ''
        let err = document.createElement('div')
        err.classList = 'error'
        err.innerHTML = 'server error try again later'
        document.getElementById('errors').append(err)
        $('#errors').fadeIn('slow')
        $('.page-loader').fadeOut()

        setTimeout(() => {
            $('#errors').fadeOut('slow')
        }, 3500);

        console.error(error);
    }
})

$("#verify_btn").on("click", async function () {
    let email = $("#email").val()
    const code = inputElements.map(({ value }) => value).join('')

    $('.page-loader').fadeIn().css('display', "flex")
    try {
        const response = await axios.post(`/login`, {
            email: email,
            password: code,
            request: true,
        },
        );
        if (response.data.status === true) {
            document.getElementById('errors').innerHTML = ''
            let error = document.createElement('div')
            error.classList = 'success'
            error.innerHTML = response.data.message
            document.getElementById('errors').append(error)
            $('#errors').fadeIn('slow')
            $(".login-pop-up").fadeOut("fast")
            $(".verify-pop-up").fadeOut("fast")
            setTimeout(() => {
                $('.page-loader').fadeOut()
                $('#errors').fadeOut('slow')
                location.reload()
            }, 1300);
        } else {
            $('.page-loader').fadeOut()
            document.getElementById('errors').innerHTML = ''
            $.each(response.data.errors, function (key, value) {
                let error = document.createElement('div')
                error.classList = 'error'
                error.innerHTML = value
                document.getElementById('errors').append(error)
            });
            $('#errors').fadeIn('slow')
            $('form input').css('outline', '2px solid #e41749')
            setTimeout(() => {
                $('input').css('outline', 'none')
                $('#errors').fadeOut('slow')
            }, 5000);
        }

    } catch (error) {
        document.getElementById('errors').innerHTML = ''
        let err = document.createElement('div')
        err.classList = 'error'
        err.innerHTML = 'server error try again later'
        document.getElementById('errors').append(err)
        $('#errors').fadeIn('slow')
        $('.page-loader').fadeOut()

        setTimeout(() => {
            $('#errors').fadeOut('slow')
        }, 3500);

        console.error(error);
    }
})

$("#edit_email").on('click', function (e) {
    e.preventDefault();
    $(".login-pop-up").fadeIn("fast")
    $(".verify-pop-up").fadeOut("fast")
})

$(".show_more_profile").on("click", function () {
    $(".profile_settings_pop").fadeToggle("fast")
})

// code input
const inputElements = [...document.querySelectorAll('input.code-input')]

inputElements.forEach((ele, index) => {
    ele.addEventListener('keydown', (e) => {
        // if the keycode is backspace & the current field is empty
        // focus the input before the current. Then the event happens
        // which will clear the "before" input box.
        if (e.keyCode === 8 && e.target.value === '') inputElements[Math.max(0, index - 1)].focus()
    })
    ele.addEventListener('input', (e) => {
        // take the first character of the input
        // this actually breaks if you input an emoji like 👨‍👩‍👧‍👦....
        // but I'm willing to overlook insane security code practices.
        const [first, ...rest] = e.target.value
        e.target.value = first ?? '' // first will be undefined when backspace was entered, so set the input to ""
        const lastInputBox = index === inputElements.length - 1
        const didInsertContent = first !== undefined
        if (didInsertContent && !lastInputBox) {
            // continue to input the rest of the string
            inputElements[index + 1].focus()
            inputElements[index + 1].value = rest.join('')
            inputElements[index + 1].dispatchEvent(new Event('input'))
        }
    })
})

$("#email").on("keyup", function () {
    $(".email-span").text($(this).val())
})

