<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Application Form</title>
    <style>
        body{
            font-family: "Khmer", "Khmer OS Battambang", "Khmer OS Siemreap";
        }

        #p1{
            position: relative;
            width: 1200px;
            height: 800px;
            background: url("/img/license2.png");
            background-repeat: no-repeat;
            background-size: 1185px 820px;
        }
        .font-head{
            font-family: "Khmer OS Muol Light", "Khmer OS Muol";
        }
        span {
            position: absolute;
        }
.h1 {
    top: 100px;
    left: 875px;
}
.h2 {
    top: 130px;
    left: 854px;
}
.img001{
    position: absolute;
    top: 167px;
    left: 895px;
}
.h3 {
    top: 150px;
    left: 185px;
}
.h4 {
    top: 175px;
    left: 145px;
}
.h5 {
    top: 200px;
    left: 140px;
}
.h6 {
    top: 210px;
    left: 520px;
    font-size: 25px;
}

.h7 {
    top: 250px;
    left: 420px;
    font-size: 20px;
}

.h8 {
    top: 284px;
    left: 502px;
    font-size: 18px;
}

.n1 {
    top: 335px;
    left: 145px;
}
.name {
    top: 335px;
    left: 425px;
} .name b {
    text-transform: uppercase;
}
.s1 {
    top: 370px;
    left: 145px;
}
.ser_type {
    top: 370px;
    left: 425px;
}
.b1 {
    top: 402px;
    left: 145px;
}
.brand {
    top: 402px;
    left: 425px;
}
.a1 {
    top: 435px;
    left: 145px;
}
.addr {
    top: 435px;
    left: 425px;
}
.t6 {
    top: 470px;
    left: 200px;
}
.t7 {
    top: 500px;
    left: 200px;
}
.t8 {
    top: 530px;
    left: 635px;
}
.t9 {
    top: 562px;
    left: 700px;
}
.t10 {
    top: 590px;
    left: 825px;
}
.t11 {
    font-size: 12px;
    top: 700px;
    left: 125px;
}



    </style>
</head>
<body>
    <div id="p1">
        <span class="h1 font-head">ព្រះរាជាណាចក្រកម្ពុជា</span>
        <span class="h2 font-head">ជាតិ សាសនា ព្រះមហាក្សត្រ</span>
        <img src="/img/img001.png" class="img001" alt="">
        <span class="h3 font-head">រដ្ឋបាលក្រុងបាត់ដំបង</span>
        <span class="h4 font-head">ការិយាល័យច្រកចេញចូលតែមួយ</span>
        <span class="h5">លេខៈ…………………………កបប.ច្រក.១</span>
        <span class="h6 font-head">បណ្ណអនុញ្ញាត</span>
        <span class="h7 font-head">ប្រកបអាជីវកម្ម-សេវាកម្ម-ពាណិជ្ជកម្ម</span>
        <span class="h8 font-head">អភិបាលក្រុងបាត់ដំបង</span>
        <span class="n1">អនុញ្ញាតឱ្យ លោក-លោកស្រី </span>
        <span class="name">: <ls class="font-head">{{ $cus->namekh }}
            </ls>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; អក្សឡាតាំង &ensp;&ensp;<b> {{ $cus->nameen }} </b> </span>
        <span class="s1">ប្រភេទអាជីវកម្ម-សេវាកម្ម-ពាណិជ្ជកម្ម </span>
        <span class="ser_type">: បើកអាជីវកម្ម{{ $ser->business_type }}  </span>
        <span class="b1">នាមករណ៍ </span>
        <span class="brand">: <b>{{ $ser->brand_namekh }} - {{ $ser->brand_nameen }}  </b></span>
        <span class="a1">អាសយដ្ឋានអាជីវកម្ម</span>
        <span class="addr">
            : {{ $ser->home==''?'':'ផ្ទះលេខ'.$ser->home }}
              {{ $ser->street==''?'':'ផ្លូវ'.$ser->street }}
              {{ $ser->group==''?'':'ក្រុមទី'.$ser->group }}

            ភូមិ{{ $vil2->namekh }} សង្កាត់{{ $com2->namekh }} ក្រុងបាត់ដំបង ខេត្ដបាត់ដំបង។
        </span>
        <span class="t6">អ្នកកាន់លិខិតអនុញ្ញាតត្រូវគោពរយ៉ាងម៉ឺងម៉ាត់តាមច្បាប់ និង បទបញ្ញត្តិផ្សេងៗ ហើយត្រូវដាក់តាំងបង្ហាញជាសាធារណៈ  ។</span>
        <span class="t7">បណ្ណអនុញ្ញាតសេវាកម្មនេះមានសុពលភាពត្រឹមថ្ងៃទី………… ខែ………………  ឆ្នាំ២០២២។ </span>
        <span class="t8">ថ្ងៃ…………..………..ខែ…………… ឆ្នាំជូត ទោស័ក ព.ស. ២៥៦៤</span>
        <span class="t9">ក្រុងបាត់ដំបង ថ្ងៃទី……… ខែ…………… ឆ្នាំ២០២១ </span>
        <span class="t10 font-head">អភិបាលក្រុង </span>
        <!-- <span class="t11">បញ្ជាក់៖ បណ្ណអនុញ្ញាតនេះត្រូវដាក់តាំង ឬ ព្យួរនៅកន្លែងទទួលភ្ញៀវ  </span> -->

    </div>
</body>
</html>