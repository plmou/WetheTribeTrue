<?php
$regexId = '/^[1-9]([]0-9]+)?$/';
$regexBirthDate = '#^(((19|20)[0-9]{2})-{1}(0[1-9]{1}|1[0-2]{1})-(0[1-9]{1}|[1-2]{1}[0-9]{1}|3[0-1]{1}))$#';
$regexMail = '#^([a-zA-Z0-9À-ÖØ-öø-ÿ.-_]+)@([a-zA-Z0-9À-ÖØ-öø-ÿ-_.]+).([a-zA-Z.]{2,250})$#';
$regexDate = '#^(2019|(20[2-9][0-9]))-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$#';
$regexText = '^[A-Z a-zÀ-ÖØ-öø-ÿ].+$';
$regexNumber = '#^[0-9]{1,255}$#';
$regexName = '#^([A-Z]{1}[A-Za-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[A-Za-zÀ-ÖØ-öø-ÿ]+){0,1}$#';
$regexPhoneNumber = '#^([0][1-79]){1}([ ][0-9]{2}){4}$#';
$regexHour = '#^([0-1][0-9]|2[0-3])(:)(00|30)$#';
$regexTime = '#^([0-1][0-9]|2[0-3])(:)([0-5][0-9]):[0-5][0-9]$#';
$regexLogin = '#^([A-Za-z]{1}[A-Za-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Za-z]{1}[A-Za-zÀ-ÖØ-öø-ÿ]+){0,1}$#';
?>
