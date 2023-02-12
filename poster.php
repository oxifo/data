<?php
   $dailyPost =[
     "apkDownload"=>array(
       1=>"https://raw.githubusercontent.com/oxifo/data/main/lulay-%E1%80%9C%E1%80%B0%E1%80%9C%E1%80%B1%E1%80%B8.apk",
       2=>"icon.png",
       3=>"lulay app လေးကို download ရယူထားလို့ရနေပြီနော်"
       ),
      "mobilelegend"=>[
        1=>"mobilelegendsfile",
        2=>"mobilelegend.jpg",
        3=>"mobile legends files တွေ download ယူစရာမလိုလောက်အောင်ကို အဆင်ပြေတဲ့နည်းလမ်းတစ်ခုညွန်ပေးမယ်နော်"
        ],
      "screenTime"=>array(
        1=>"screenTime.html",
        2=>"screenTime.jpeg",
        3=>"Screen တွေကထွက်တဲ့ blue light ကြောင့်သင့်မျက်စိကိုဆိုးရွားစွာ ထိခိုက်နေတာကို သတိမထားပဲနေလို့မရဘူးနော်"
        ),
      "tta"=>array(
        1=>"googleInstaller",
        2=>"googleplay.png",
        3=>"play store မရှိတဲ့မိတ်ဆွေတိုအတွက် google installer လေးတွေကို တ၀်နေရာတည်းရအောင်စုစည်းပေးထားပါတယ်"
        ),
      "SmartphoneOverheating"=>array(
        1=>"SmartphoneOverheating",
        2=>"smartphonehot.jpg",
        3=>"ဘာကြောင့်မှန်းမသိဖုန်းကအရမ်းပူနေတာလား သင်သတိမထားမိတဲ့ အချက်တွေက သင့်ဖုန်းကိုပိုပူလာစေတာပါ"  
        ),
      "LearnEnglish"=>array(
        1=>"LearnEnglish",
        2=>"images-3.jpeg",
        3=>"အင်္ဂလိပ်စာလေလာနေတာလား?ဒါဆိုရင်အခြေခံကစလေ့လာလို့ရမဲ့စာအုပ်လေးလမ်းလညွန်ပေးလိုက်မယ်နော်"
        )
     ];


foreach ($dailyPost as $post){
  $url =$post[1];
  $img=$post[2];
  $t =$post[3];
  echo "<div id='pined'onclick='loadpost(`$url`)'><embed onerror='src=`/img/Loading_icon.gif`'src='https://raw.githubusercontent.com/oxifo/data/main/$img'/>
        <p id='ptxt'>$t</p>
        </div> ";
}
      
?>
