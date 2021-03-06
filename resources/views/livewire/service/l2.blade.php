<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Application Form</title>
    <style>
        @font-face {
  font-family: 'header';
  src: url('/css/fonts/KhmerOSmuollight.ttf') format('truetype');
}
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
            font-family: "header";
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
    top: 215px;
    left: 520px;
    font-size: 25px;
}

.h7 {
    top: 260px;
    left: 420px;
    font-size: 20px;
}

.h8 {
    top: 295px;
    left: 502px;
    font-size: 18px;
}

.n1 {
    top: 340px;
    left: 145px;
}
.name {
    top: 340px;
    left: 425px;
} .name b {
    text-transform: uppercase;
}
.s1 {
    top: 373px;
    left: 145px;
}
.ser_type {
    top: 373px;
    left: 425px;
}
.b1 {
    top: 407px;
    left: 145px;
}
.brand {
    top: 407px;
    left: 425px;
}
.a1 {
    top: 438px;
    left: 145px;
}
.addr {
    top: 438px;
    left: 425px;
}
.t6 {
    top: 472px;
    left: 200px;
}
.t7 {
    top: 500px;
    left: 200px;
}
.t8 , .t9 {
    font-family: "Khmer", "Khmer OS Battambang", "Khmer OS Siemreap";
    position: absolute;
    font-size: 16px;
    border: none;
    background: none;
    text-align: center;
    width: 430px;
    height: 20px;
    left: 635px;
}
.t8{
    top: 530px;
}
.t9 {
    top: 562px;
}

.t10 {
    top: 590px;
    left: 825px;
}
.num{
    font-family: "Khmer", "Khmer OS Battambang", "Khmer OS Siemreap";
    position: absolute;
    font-size: 17px;
    border: none;
    background: none;
    text-align: center;
    top: 200px;
    left: 185px;
    width: 125px;
}
input[type="text"]:focus {
    outline: 0px;
}

.photobox{
    position: absolute;
    width: 85px;
    height: 105px;
    text-align: center;
    border: 1px solid #1a202c;
    top: 215px;
    left: 933px;
}

@media print {

  @page {
      size: A4 landscape;
  }

}

    </style>
</head>
<body>
    <div id="p1">
        <div class="photobox"><br><br>4 x 6</div>
        <span class="h1 font-head">ព្រះរាជាណាចក្រកម្ពុជា</span>
        <span class="h2 font-head">ជាតិ សាសនា ព្រះមហាក្សត្រ</span>
        <img src="/img/img001.png" class="img001" alt="">
        <span class="h3 font-head">រដ្ឋបាលក្រុងបាត់ដំបង</span>
        <span class="h4 font-head">ការិយាល័យច្រកចេញចូលតែមួយ</span>
        <span class="h5">លេខៈ…………………………កបប.ច្រក.១</span>
        <input type="text" class="num">
        <span class="h6 font-head">បណ្ណអនុញ្ញាត</span>
        <span class="h7 font-head">ប្រកបអាជីវកម្ម-សេវាកម្ម-ពាណិជ្ជកម្ម</span>
        <span class="h8 font-head">អភិបាលក្រុងបាត់ដំបង</span>
        <span class="n1">អនុញ្ញាតឱ្យ លោក-លោកស្រី </span>
        <span class="name">: <ls class="font-head">{{ $cus->namekh }}
            </ls>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; អក្សឡាតាំង &ensp;&ensp;<b> {{ $cus->nameen }} </b> </span>
        <span class="s1">ប្រភេទអាជីវកម្ម-សេវាកម្ម-ពាណិជ្ជកម្ម </span>
        <span class="ser_type font-head">: {{ $ser->business_type }}  </span>
        <span class="b1">នាមករណ៍ </span>
        <span class="brand font-head">: {{ $ser->brand_namekh }} <b>{{ $ser->brand_nameen==''?'':'- '.$ser->brand_nameen }}  </b></span>
        <span class="a1">អាសយដ្ឋានអាជីវកម្ម</span>
        <span class="addr">
            : {{ $ser->home==''?'':'ផ្ទះលេខ'.$ser->home }}
              {{ $ser->locate }}
              {{ $ser->street==''?'':'ផ្លូវ'.$ser->street }}
              {{ $ser->group==''?'':'ក្រុមទី'.$ser->group }}

            ភូមិ{{ $vil2->namekh }} សង្កាត់{{ $com2->namekh }} ក្រុងបាត់ដំបង ខេត្ដបាត់ដំបង។
        </span>
        <span class="t6">អ្នកកាន់លិខិតអនុញ្ញាតត្រូវគោពរយ៉ាងម៉ឺងម៉ាត់តាមច្បាប់ និង បទបញ្ញត្តិផ្សេងៗ ហើយត្រូវដាក់តាំងបង្ហាញជាសាធារណៈ  ។</span>
        <span class="t7">បណ្ណអនុញ្ញាតសេវាកម្មនេះមានសុពលភាពត្រឹម {{ $date_ex }}។ </span>
        <input class="t8" value="{{ $date_kh }}" type="text" >
        <input type="text" value="ក្រុងបាត់ដំបង {{ $date_gen }}" class="t9">
        <span class="t10 font-head">អភិបាលក្រុង </span>
        <!-- <span class="t11">បញ្ជាក់៖ បណ្ណអនុញ្ញាតនេះត្រូវដាក់តាំង ឬ ព្យួរនៅកន្លែងទទួលភ្ញៀវ  </span> -->

    </div>

<script type="application/javascript">
    window.onafterprint = function () { window.close(); }
</script>

</body>
</html>
