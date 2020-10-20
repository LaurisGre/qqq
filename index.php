<?php

for($i = 1 ; $i <= 5 ; $i++) {
    for($u = 1 ; $u <= 3 ; $u++){
        if (($u === 1 && ($i ===2 || $i === 3 || $i === 4 || $i === 5)) || 
        ($u === 2 && ($i ===1 || $i === 3)) ||
        ($u === 3 && ($i ===2 || $i === 3 || $i === 4 || $i === 5))
        ) {
            print '.O.';
        } else {
            print '_._';
        }
    }
    print '<br />';
}
print '<br />';
for($i = 1 ; $i <= 5 ; $i++) {
    for($u = 1 ; $u <= 3 ; $u++){
        if (($u === 1 && ($i === 1 || $i === 2 || $i === 3 || $i === 4 || $i === 5)) || 
        ($u === 2 && ($i ===1 || $i === 3 || $i === 5)) ||
        ($u === 3 && ($i ===2 || $i === 4))
        ) {
            print '.O.';
        } else {
            print '_._';
        }
    }
    print '<br />';
}
print '<br />';
for($i = 1 ; $i <= 5 ; $i++) {
    for($u = 1 ; $u <= 3 ; $u++){
        if (($u === 1 && ($i === 2 || $i === 3 || $i === 4)) || 
        ($u === 2 && ($i ===1 || $i === 5)) ||
        ($u === 3 && ($i ===1 || $i === 5))
        ) {
            print '.O.';
        } else {
            print '_._';
        }
    }
    print '<br />';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
</body>
</html>