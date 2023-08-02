$ ( function ( ) {
    $ (document).on ('click', '#delete', function (e) {
        e.preventDefault();
        var link = $(this).attr("href");
        swal.fire({
            title: 'آیا مطمعنید؟؟',
            texe: "این اطلاعات پاک شود؟",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'yes,delete it!',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                    ' Deleted ! ',
                    ' Your file has been ',
                    ' success '
                )
            }
        })

    });
});


$(document).ready(
    function ()
    {
        $('#image').change(function (e)
        {
            var reader = new FileReader();
            reader.onload=function (e)
            {
                $('#ShowImageCategor').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    }
)    ;
