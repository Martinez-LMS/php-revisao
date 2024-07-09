<?php 

    echo password_hash("senha124", PASSWORD_DEFAULT);

    // $2y$10$2Fp8gGFKPLzX0QkTII5ki.AzcwljwFUrxAHRtgpxzqMIzKJXw8Ka.

    // $2y$10$5JFbbaEJfJRGM57UHSEHp.a7K.SzmLTqYP.XuWJ8PNu1UK32yLe9i
    // $2y$10$pmWZmFhMdJutMfK8hqqUAOnzUxeUlChDTrEx8NYchuuuoGOe.Fd..
    // $2y$10$/vEnKnjfT9G/pKE6BA3rmeLX6c1cGg6hh6JRdJqeiaFQ4Z0mdxZC6

    $hash = '$2y$10$pmWZmFhMdJutMfK8hqqUAOnzUxeUlChDTrEx8NYchuuuoGOe.Fd.';

    if (password_verify('senha124', $hash)) {
        echo '<br>Password is valid!';
    } else {
        echo '<br>Invalid password.';
    }
    
?>