<?php
echo '<br>';
echo '<br>';

echo 'Pirmas uzdavinys';
echo '<br>';
$masyvas =[];
foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, 5) as $keySmall => $_) {
        $masyvas[$keyBig][$keySmall] = rand(5, 25);
    }
}
print_r($masyvas);
echo '<br>';
echo '<br>';

echo 'Antras uzdavinys';
echo '<br>';
echo 'A dalis';
echo '<br>';
$masyvas =[];
$count = 0;
foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, 5) as $keySmall => $_) {
        $masyvas[$keyBig][$keySmall] = rand(5, 25);
        if($masyvas[$keyBig][$keySmall] > 10) {
            $count++;
        }
    }
}
echo $count;
echo '<br>';
echo '<br>';
echo 'B dalis';
echo '<br>';
$max = 0;
foreach ($masyvas as $keyBig => $value) {
    foreach ($masyvas[$keyBig] as $keySmall => $value) {
        if($value > $max) {
            $max = $value;
        }
    }
}
echo $max ;
echo '<br>';
echo '<br>';
echo 'C dalis';
echo '<br>';

$suma = array_fill(0, 5, 0);
foreach ($masyvas as $key => $value) {
    foreach ($masyvas[$key] as $key => $value) {
        $suma[$key] += $value;
    }
}
print_r($suma);
echo '<br>';
echo '<br>';
echo 'D dalis';
echo '<br>';
foreach ($masyvas as &$value) {
    array_push($value, rand(5, 25));
    array_push($value, rand(5, 25));
}
unset($value);
print_r($masyvas);
echo '<br>';
echo '<br>';
echo 'E dalis';
echo '<br>';
$suma1 = array_fill(0, 10, 0);
foreach ($masyvas as $key => $value) {
    foreach ($masyvas[$key] as $value) {
        $suma1[$key] += $value;
    }
}
print_r($suma1);
echo '<br>';
echo '<br>';

echo 'Trecias uzdavinys';
echo '<br>';
$masyvas1 = [];
$abc = range('A', 'Z');
foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, rand(2, 20)) as $keySmall => $_) {
        $masyvas1[$keyBig][$keySmall] = $abc[rand(0, 25)];
    }
}
sort($masyvas1);
print_r($masyvas1);
echo '<br>';
echo '<br>';

echo 'Ketvirtas uzdavinys';
echo '<br>';
usort($masyvas1, function($a, $b) {
    $ak = (int) in_array('K', $a);
    $bk = (int) in_array('K', $b);

    if ($ak + $bk == 1) {
    return $bk <=> $ak;
    }
    return count($a) <=> count($b);
});
print_r($masyvas1);
echo '<br>';
echo '<br>';

echo 'Penktas uzdavinys';
echo '<br>';
$masyvas2 = [];
do {
    $uid = rand(1, 50);
    foreach ($masyvas2 as $user) {
        if($user['user_id'] == $uid) {
            continue 2;
        }
    }
    $masyvas2[] = ['user_id' => $uid, 'place_in_row' => rand(0, 100)];
} while (count($masyvas2) < 30);
    
print_r($masyvas2);
echo '<br>';
echo '<br>';

echo 'Sestas uzdavinys';
echo '<br>';

usort($masyvas2, function($a, $b) {
    return $a <=> $b;
});
print_r($masyvas2);
usort($masyvas2, function($a, $b) {
    return $b['place_in_row'] <=> $a['place_in_row'];
});
echo '<br>';
print_r($masyvas2);
echo '<br>';
echo '<br>';

echo 'Septintas uzdavinys';
echo '<br>';
$masyvas2 = [];
do {
    $uid = rand(1, 50);
    foreach ($masyvas2 as $user) {
        if($user['user_id'] == $uid) {
            continue 2;
        }
    }
    $masyvas2[] = ['user_id' => $uid, 'place_in_row' => rand(0, 100)];
} while (count($masyvas2) < 30);
foreach ($masyvas2 as &$user) {
    $user['name'] = '';
    $user['surname'] = '';
    foreach (range(1, rand(5, 15)) as $_) {
        $user['name'] .= range('a', 'z')[rand(0, 25)];
        $user['surname'] .= range('a', 'z')[rand(0, 25)];
    }
}
print_r($masyvas2);
echo '<br>';
echo '<br>';

echo 'Astuntas uzdavinys';
echo '<br>';
$masyvas4 = [];
foreach (range(1, 10) as $key1 => $_) {
    $num = rand(0, 5);
    if($num == 0){
        $masyvas4[$key1] = rand(0, 10);
    } else {
        foreach (range(1, $num) as $key2 => $_) {
            $masyvas4[$key1][] = rand(0, 10);
        }
    }
}
print_r($masyvas4);
echo '<br>';
echo '<br>';

echo 'Devintas uzdavinys';
echo '<br>';
usort($masyvas4, function($a, $b) {
    $asum = 0;
    if(is_array($a)) {
        foreach($a as $value) {
            $asum += $value;
        }
        $a = $asum;
    }
    $bsum = 0; 
    if(is_array($b)) {
        foreach($b as $value) {
            $bsum += $value;
        }
        $b = $bsum;
    }
    return $a <=> $b;
}
);
print_r($masyvas4);
