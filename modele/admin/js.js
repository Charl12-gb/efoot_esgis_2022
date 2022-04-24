$(function() {
    $(document).ready(function() {
        console.log('Le script JS a bien été chargé');
        $("#myForm").submit(function(e) {
            e.preventDefault();
            var email = document.getElementById("email").value;
            var checkbox = document.getElementById("box").checked;
            //console.log("Email : " + email + " Box : " + checkbox);
            if (checkbox === true) { var verifie = 'admin'; }
            if (checkbox === false) { var verifie = 'joueur'; }
            var url = '../../modele/admin/connexion_trait.php';

            $.ajax({
                url: url,
                type: "POST",
                data: {
                    'email': email,
                    'type': verifie,
                    'action': 'verifie',
                }
            }).done(function(response) {
                //console.log("Sortie" + response + " Type : " + verifie);
                if (response == 'false') { var loadpage = "../../efoot/connexion/?mailFalse #actualispage"; } else {
                    if (checkbox === true) { var loadpage = "../../efoot/connexion/?mailTrue&mail1&email=" + email + " #actualispage"; } else {
                        var loadpage = "../../efoot/connexion/?mailTrue&mail2&email=" + email + " #actualispage";
                    }
                }
                $('#actualispage').load(loadpage);
            });
        });
    });
});