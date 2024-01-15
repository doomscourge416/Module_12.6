<!DOCTYPE html>
<html>
<body>

<?php



$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];

echo "Взятая по функции строка из массива \"example_persons_array\":<br/><br/>";

function getFullnameFromArray($example_persons_array){
    global $example_persons_array;
    global $fullName;
    $min = 0;
    $arrLength = count($example_persons_array) - 1;
    $max = $arrLength;
    $number = rand($min, $max);
    if ($number === 0){
        $fullName = $example_persons_array[$number]['fullname'].";<br/>";
    } else if ($number === 1){
        $fullName = $example_persons_array[$number]['fullname'].";<br/>";
    } else if ($number === 2){
        $fullName = $example_persons_array[$number]['fullname'].";<br/>";
    } else if ($number === 3){
        $fullName = $example_persons_array[$number]['fullname'].";<br/>";
    } else if ($number === 4){
        $fullName = $example_persons_array[$number]['fullname'].";<br/>";
    } else if ($number === 5){
        $fullName = $example_persons_array[$number]['fullname'].";<br/>";
    } else if ($number === 6){
        $fullName = $example_persons_array[$number]['fullname'].";<br/>";
    } else if ($number === 7){
        $fullName = $example_persons_array[$number]['fullname'].";<br/>";
    } else if ($number === 8){
        $fullName = $example_persons_array[$number]['fullname'].";<br/>";
    } else if ($number === 9){
        $fullName = $example_persons_array[$number]['fullname'].";<br/>";
    } else if ($number === 10){
        $fullName = $example_persons_array[$number]['fullname'].";<br/>";    
    };
    
    print_r(gettype($fullName));
    echo " - ";
    print_r($fullName);
    echo "<br/><br/>";
    
};

getFullnameFromArray($example_persons_array);

//----------------------------- СТАРОЕ РЕШЕНИЕ, НЕ СМОТРИТЕ СЮДА)))))
//  Расскоменчивайте вызов нужной вам строчки ФИО из массива - 


// getFullnameFromArray($example_persons_array, 0); // Иванов Иван Иванович !
// getFullnameFromArray($example_persons_array, 1); // Степанова Наталья Степановна !
// getFullnameFromArray($example_persons_array, 2); // Пащенко Владимир Александрович !
// getFullnameFromArray($example_persons_array, 3); // Громов Александр Иванович !
// getFullnameFromArray($example_persons_array, 4); // Славин Семён Сергеевич !
// getFullnameFromArray($example_persons_array, 5); // Цой Владимир Антонович !
// getFullnameFromArray($example_persons_array, 6); // Быстрая Юлия Сергеевна !
// getFullnameFromArray($example_persons_array, 7); // Шматко Антонина Сергеевна !
// getFullnameFromArray($example_persons_array, 8); // аль-Хорезми Мухаммад ибн-Муса !
// getFullnameFromArray($example_persons_array, 9); // Бардо Жаклин Фёдоровна ????
// getFullnameFromArray($example_persons_array, 10); //  Шварцнегер Арнольд Густавович !
//-----------------------------   ВЫШЕ СТАРОЕ РЕШЕНИЕ, НЕ СМОТРИТЕ СЮДА)))))

echo "Перевёденная по частям в массив строка : <br/><br/> ";

function getPartsFromFullname ($fullName){
    global $piecesSeparated;
    global $surname;
    global $name;
    global $patronymic;
    $piecesSeparated = explode(" ", $fullName);
    $piecesSeparated['Surname'] = $piecesSeparated[0];
    $piecesSeparated['Name'] = $piecesSeparated[1];
    $piecesSeparated['Patronymic'] = $piecesSeparated[2];
    $surname =  $piecesSeparated['Surname'];
    $name = $piecesSeparated['Name'];
    $patronymic = $piecesSeparated['Patronymic'];
    unset($piecesSeparated[0]);
    unset($piecesSeparated[1]);
    unset($piecesSeparated[2]);
    
    
};

getPartsFromFullname($fullName);
print_r($piecesSeparated);
// print_r(typeof($piecesSeparated));





function getFullnameFromParts ($surname, $name, $patronymic){
    global $piecesthogether;
    $piecesthogether = $surname . ' ' . $name . ' ' . $patronymic;
    return $piecesthogether;
    
};

echo "<br/><br/>Строчка склеенная из трёх строчек, взятых из массива :<br/><br/><br/>";

getFullnameFromParts($surname, $name, $patronymic);
print_r(gettype($piecesthogether));
    echo " - ". $piecesthogether;




function getShortName($fullName){

    global $piecesSeparated;

    global $surname;
    global $name;
    global $patronymic;

    getPartsFromFullname($fullName);
    unset($piecesSeparated['Surname']);

    global $piecesSeparatedCopy;
    $piecesSeparatedCopy = $piecesSeparated;

    $piecesSeparatedCopy['Surname'] = mb_substr($surname,0,1) . '.';

    global $piecesSeparatedMerge;
    $piecesSeparatedMerge = array_merge($piecesSeparated, $piecesSeparatedCopy);
    unset($piecesSeparatedMerge['Patronymic']);
    

    // print_r($piecesSeparated);
    // print_r($piecesSeparatedCopy);


    // print_r($piecesSeparatedMerge);
    global $piecesSeparatedReady;
    $piecesSeparatedReady = implode(' ', $piecesSeparatedMerge);
    return $piecesSeparatedReady;


};

echo "<br/><br/><br/>Задание 2: Сокращение ФИО.<br/><br/><br/>";

getShortName($fullName);
echo $piecesSeparatedReady;


function getGenderFromName($fullName){

    global $piecesSeparated;
    // global $surname;
    // global $name;
    // global $patronymic;

    getPartsFromFullname($fullName);
    // print_r ($piecesSeparated);

    global $genderSummaryScore;
    $genderSummaryScore = 0;

    $FemalePatronymicEnding = 'вна';
    $MaleSurnameEnding = 'ич';

    if (strpos ($piecesSeparated['Patronymic'], $FemalePatronymicEnding)/* !== false*/) {

        // echo "<br/>Жен. Символ в отчестве найден<br/>";
        $genderSummaryScore = $genderSummaryScore  - 1;
        // print_r("Gender Summary Score: " . $genderSummaryScore);

    } else if(strpos ($piecesSeparated['Patronymic'], $MaleSurnameEnding)/* !== false*/){

        // echo "<br/>Муж. Символ в отчестве найден<br/>";
        $genderSummaryScore = $genderSummaryScore  + 1;
        // print_r("Gender Summary Score: " . $genderSummaryScore);

    }else{

        // echo "<br/>Ошибка : Ни один из признаков пола по отчеству не найден!";

    };


    $FemaleNameEnding = 'а';
    $MaleNameEnding1 = 'й';
    $MaleNameEnding2 = 'н';

    if (str_ends_with($piecesSeparated['Name'], $FemaleNameEnding)) {

        // echo "<br/>Жен. Символ в имени найден<br/>";
        $genderSummaryScore = $genderSummaryScore  - 1;
        // print_r("Gender Summary Score: " . $genderSummaryScore);

    } else if(str_ends_with($piecesSeparated['Name'], $MaleNameEnding1)) {

        // echo "<br/>Муж. Символ в имени найден<br/>";
        $genderSummaryScore = $genderSummaryScore  + 1;
        // print_r("Gender Summary Score: " . $genderSummaryScore);

    } else if(str_ends_with($piecesSeparated['Name'], $MaleNameEnding2)){

        // echo "<br/>Муж. Символ в имени найден<br/>";
        $genderSummaryScore = $genderSummaryScore  + 1;
        // print_r("Gender Summary Score: " . $genderSummaryScore);
    } else {

        // echo "<br/>Ошибка : Ни один из признаков пола по имени не найден!";

    };



    $FemaleSurnameEnding = 'ва';
    $MaleSurnameEnding = 'в';


    if (str_ends_with($piecesSeparated['Surname'], $FemaleSurnameEnding)) {

        // echo "<br/>Жен. Символ в фамилии найден<br/>";
        $genderSummaryScore = $genderSummaryScore  - 1;
        // print_r("Gender Summary Score: " . $genderSummaryScore);

    } else if(str_ends_with($piecesSeparated['Name'], $MaleSurnameEnding)) {

        // echo "<br/>Муж. Символ в фамилии найден<br/>";
        $genderSummaryScore = $genderSummaryScore  + 1;
        // print_r("Gender Summary Score: " . $genderSummaryScore);
    } else {
        
        // echo "<br/>Ошибка : Ни один из признаков пола по отчеству не найден!";

    };


    // if ( $genderSummaryScore < 0){
    //     global $personGender;
    //     $personGender = 'Женщина';
    //     // echo "<br/><br/>Женщина";
    // } else if ( $genderSummaryScore = 0){
    //     global $personGender;
    //     $personGender = 'Неопределённый пол';
    //     // echo "<br/><br/>Ошибка определения пола";
    // } else {
    //     global $personGender;
    //     $personGender = 'Мужчина';
    //     // echo "<br/><br/>Мужчина";
    // };
    if ( $genderSummaryScore < 0){
        global $personGender;
        $personGender = 'Женщина';
        // echo "<br/><br/>Женщина";
    } else if ( $genderSummaryScore > 1){
        global $personGender;
        $personGender = 'Мужчина';
        // echo "<br/><br/>Ошибка определения пола";
    } else {
        global $personGender;
        $personGender = 'Неопределённый пол';
        // echo "<br/><br/>Мужчина";
    };
    return $genderSummaryScore; 
};

echo "<br/><Br/>Задание 3: Функция определения пола по ФИО<br/><br/><br/>";
getGenderFromName($fullName);
print_r("Gender Summary Score: " . $genderSummaryScore);

$genderArray = $example_persons_array;

function getGenderDescription ($genderArray){
    global $genderArray;
    global $genderSummaryScore;
    $arrLength = count($genderArray);

    for ($i = 0; $i < $arrLength; $i++){
        
        getGenderFromName($genderArray[$i]['fullname']);
        

        // if ( $genderSummaryScore < 0){
        //     $gender = 'Женщина';
            
        //     array_push($genderArray, $gender);
            

        // } else if ( $genderSummaryScore = 0){
        //     $gender = 'Неопределённый пол';
            
        //     array_push($genderArray, $gender);
        // } else {

        //     $gender = 'Мужчина';
            
        //     array_push($genderArray, $gender);

        // };
        if ( $genderSummaryScore < 0){
            $gender = 'Женщина';
            
            array_push($genderArray, $gender);
            

        } else if ( $genderSummaryScore > 0){
            $gender = 'Мужчина';
            
            array_push($genderArray, $gender);
        } else {

            $gender = 'Неопределённый пол';
            
            array_push($genderArray, $gender);

        };

        
        unset($genderArray[$i]);
        

        
        // echo"\nitteration $i";
    };

        // print_r($genderArray);
        
        
        $counts = array_count_values($genderArray);
        
        
        // function peopleSum($counts['Мужчина'],$counts['Женщина'], $counts['Неопределённый пол']){

        // };
        

        if(array_key_exists('Мужчина', $counts)){

            
            // percent($counts['Мужчина'], $peopleSum);

        } else {
            $counts['Мужчина'] = 0;
            echo "<br/>Мужчин нет";
        };

        if(array_key_exists('Женщина', $counts)){

            
            // percent($counts['Женщина'], $peopleSum);
        } else {
            $counts['Женщина'] = 0;
            echo "<br/>Женщин нет";
        };

        if(array_key_exists('Неопределённый пол', $counts)){

            
            // percent($counts['Неопределённый пол'], $peopleSum);
        } else {
            $counts['Неопределённый пол'] = 0;
            echo "\n\n  <br/>Неопределённого пола нет";
        };
       
        $peopleSum = $counts['Мужчина'] + $counts['Женщина'] + $counts['Неопределённый пол'];

        function percent($num, $peopleSum){
            $count1 = $num / $peopleSum;
            $count2 = $count1 * 100;
            // $count3 = 100 - $count2;
            $count = number_format($count2, 0);
            echo "\n" . $count . " %";
        };

        
        echo "<br/><br/>\n Количество Мужчин: " . $counts['Мужчина'] . " ;";
        percent($counts['Мужчина'], $peopleSum);
        
        echo  "\n Количество Женщин: ". $counts['Женщина'] . " ;";
        percent($counts['Женщина'], $peopleSum);

        
        echo  "\n Количество неопределённого пола: ". $counts['Неопределённый пол'] . " ;";
        percent($counts['Неопределённый пол'], $peopleSum);
        
     
};


getGenderDescription($genderArray);




global $propmtPI;
global $randomPI;

// echo $randomPersonFullName;
// echo $randomPersonGender;

function getPerfectPartner($surname1, $name1, $patronymic1, $array){
    function getRandomPerson($array){
        global $k;
        global $v;
        global $randomPersonFullName;
        global $randomPersonGender;
        
    
        $k = array_rand($array);
        $v = $array[$k];
    
        
        $randomPersonFullName = $array[$k]['fullname'];
    
        
        $randomPersonGender = getGenderFromName($randomPersonFullName);
        return $randomPersonGender;
    };
    
    global $k;
    global $v;
    global $randomPersonFullName;
    global $randomPersonGender;
    
    getRandomPerson($array);



    global $k;
    global $v;
    global $randomPersonFullName;
    global $randomPersonGender;
    
    $surname2 = mb_strtoupper(mb_substr($surname1, 0, 1)) . mb_substr($surname1, 1, mb_strlen($surname1));
    $name2 = mb_strtoupper(mb_substr($name1, 0, 1)) . mb_substr($name1, 1, mb_strlen($name1));
    $patronymic2 = mb_strtoupper(mb_substr($patronymic1, 0, 1)) . mb_substr($patronymic1, 1, mb_strlen($patronymic1));
    


    $promptPersonFullName = getFullnameFromParts($surname2, $name2, $patronymic2);
    $promptPersonGender = getGenderFromName($promptPersonFullName);

    echo "<br/><br/>Человек, которому будем искать пару -  ";
    echo $promptPersonFullName;

    if ( $promptPersonGender < 0){
        $propmtPI = 1;
        echo "  Женщина";
    
    } else if ( $promptPersonGender > 0){
        $propmtPI = 2;
        echo "  Мужчина";
    } else {
        $propmtPI = 3;
        echo "  Неопределённый пол";

    };


    if ( $randomPersonGender < 0){
        $randomPI = 1;
        $message = 'Женщина';
    
    } else if ( $randomPersonGender > 0){
        $randomPI = 2;
        $message = 'Мужчина';
    } else {
        $randomPI = 3;
        $message = 'Неопределённый пол';

    };

    if($propmtPI === $randomPI){

        // echo "ВСЁ ПЛОХО!!!";
        unset($randomPersonFullName);
        unset($randomPersonGender);


        getRandomPerson($array);
        
    }else{

        // echo "ВСЁ ОК";
    };

    $promtPersonShort = getShortName($promptPersonFullName);
    $randomPersonShort = @getShortName($randomPersonFullName);

    echo "<br/>Случайный человек из массива - ";
    print_r($v);

    
    echo "<br/>  Случайный человек в строчку -  " . @$randomPersonFullName;
    echo " $message , обновите страницу, чтобы получить другую пару)";


    echo "<br/>  $promtPersonShort + ";
    echo  "  $randomPersonShort";

    if(isset($randomPersonFullName)){
        echo " Совместимость идеальна на : ";
     echo number_format(rand(5000, 10000) / 100, 2, '.', '');
    }else{
        echo "Обновите страницу, чтобы найти пару!";
    };
    

    



   
};



getPerfectPartner('Иванова', 'Екатерина', 'Ивановна', $example_persons_array);



?>
</body>
</html>
