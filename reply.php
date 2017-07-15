<?php 


$nor_n = "فرح";
$rand = array_rand($word, 1);
$nor = array("ها 😕","شكو 😡","عيوني 😍☘","عوفوني بحالي 😔😹","شتريدون منهة 😑👆");
$s = array_rand($nor, 1);


$rand_vo = array_rand($vo, 1);
$love = array("حبتك حية 😂👌" , "اعذرني احب بس ال عتابي 😍❤️" , "واني هم 🙊💋" , "لعد ازحفلي خاص 😹❤️" , "ايع 🤧" , "دي زاحف 😹👌", "طير منا 😐😹" );
$rand_love = array_rand($love,1);
$wel = array("هلو" , "شونكم" , "سلام عليكم" , "السلام عليكم" , "هلاو" , "شلونكم" , "اني جيت" , "احم" , "هبلو" , "hi" , "هلو" , "هلا");

$rand_welc = array_rand($wel, 1);


$replay_name = $update["message"]["reply_to_message"]["from"]["first_name"];