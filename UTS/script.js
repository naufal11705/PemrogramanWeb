$(document).ready(function() {
    $("#myForm").submit(function(event) {
        event.preventDefault(); 

        var nama = $("#nama").val();
        var password = $("#password").val();
        var valid = true;

        if (nama == "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        } else {
            $("#nama-error").text("");
        }

        if (password == "") {
            $("#password-error").text("Password harus diisi.");
            valid = false;
        } else {
            if (password.length > 6) { 
                $("#password-error").text("Password maksimal 6 karakter.");
                valid = false;
            }  else {
                $("#password-error").text("");
            }

            const patterns = [
                { regex: /[a-z]/, error: "Password harus terdiri dari huruf besar dan kecil." },
                { regex: /[A-Z]/, error: "Password harus terdiri dari huruf besar dan kecil." },
            ];
    
            for (const { regex, error } of patterns) {
                if (!regex.test(password)) {
                    $("#password-error").text(error);
                    valid = false;
                    break;
                }
            }
        }

        if (valid) {
            $.ajax({
                url: 'proses_validasi.php', 
                type: 'POST',
                data: { nama: nama, password: password },
                error: function() {
                    alert('Terjadi kesalahan.');
                }
            });
            window.location.href = 'home.php';
        }
    });

});