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
            background: url("/img/license.png");
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
    top: 148px;
    left: 875px;
}
.h2 {
    top: 175px;
    left: 854px;
}
.img001{
    position: absolute;
    top: 208px;
    left: 895px;
}
.h3 {
    top: 190px;
    left: 165px;
}
.h4 {
    top: 215px;
    left: 120px;
}
.h5 {
    top: 240px;
    left: 117px;
}
.h6 {
    top: 235px;
    left: 535px;
    font-size: 20px;
}

.h7 {
    top: 267px;
    left: 425px;
    font-size: 18px;
}
.t1 {
    font-size: 15px;
    top: 305px;
    left: 270px;
}
.t2 {
    font-size: 15px;
    top: 305px;
    left: 360px;
}
.t3 {
    font-size: 15px;
    top: 327px;
    left: 368px;
}
.t4 {
    font-size: 15px;
    top: 349px;
    left: 360px;
}
.t5 {
    font-size: 15px;
    top: 373px;
    left: 368px;
}
.n1 {
    top: 405px;
    left: 270px;
}
.name {
    top: 405px;
    left: 430px;
}
.name b{
    text-transform: uppercase;
}
.s1 {
    top: 433px;
    left: 270px;
}
.ser_type {
    top: 433px;
    left: 430px;
}
.b1 {
    top: 458px;
    left: 270px;
}
.brand {
    top: 458px;
    left: 430px;
}
.a1 {
    top: 483px;
    left: 270px;
}
.addr {
    top: 483px;
    left: 430px;
}
.t6 {
    top: 507px;
    left: 368px;
}
.t7 {
    top: 533px;
    left: 368px;
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
.t8 {
    top: 562px;
}
.t9 {
    top: 588px;
}

.t10 {
    top: 610px;
    left: 828px;
}
.t11 {
    font-size: 12px;
    top: 700px;
    left: 125px;
}


.num{
    position: absolute;
    font-size: 18px;
    border: none;
    background: none;
    text-align: center;
    top: 243px;
    left: 165px;
    width: 125px;
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
        <span class="h1 font-head">ព្រះរាជាណាចក្រកម្ពុជា</span>
        <span class="h2 font-head">ជាតិ សាសនា ព្រះមហាក្សត្រ</span>
        <img src="/img/img001.png" class="img001" alt="">
        <span class="h3 font-head">រដ្ឋបាលក្រុងបាត់ដំបង</span>
        <span class="h4 font-head">ការិយាល័យច្រកចេញចូលតែមួយ</span>
        <span class="h5">លេខៈ…………………………កបប.ច្រក.១</span>
        <input type="text" class="num">
        <span class="h6 font-head">បណ្ណអនុញ្ញាត</span>
        <span class="h7 font-head">ប្រកបអាជីវកម្ម-សេវាកម្មវិស័យវប្បធម៌</span>
        <span class="t1">យោង &nbsp; ៖ </span>
        <span class="t2">-  អនុក្រឹត្យលេខ១៨ អនក្រ.បក ចុះថ្ងៃទី០៨ ខែកុម្ភៈ ឆ្នាំ២០១៧ ស្តីពីការបង្កើតយន្តការច្រកចេញចូលតែមួយ </span>
        <span class="t3">សម្រាប់ការផ្តល់សេវារដ្ឋបាលនៅរដ្ឋបាលថ្នាក់ក្រោមជាតិ </span>
        <span class="t4">-  ប្រកាសរួមលេខ៦៥៧ សហវ.ប្រក ចុះថ្ងៃទី០៦ ខែមិថុនា ឆ្នាំ២០១៦ ស្តីពីការផ្តល់សេវាសាធារណៈរបស់ </span>
        <span class="t5">ក្រសួងវប្បធម៌និងវិចិត្រសិល្បៈ រវាងក្រសួងសេដ្ឋកិច្ចនិងហិរញ្ញវត្ថុ និង ក្រសួងវប្បធម៌និងវិចិត្រសិល្បៈ </span>
        <span class="n1">អនុញ្ញាតឲ្យឈ្មោះ </span>
        <span class="name">: <ls class="font-head">{{ $cus->namekh }}  </ls> អក្សឡាតាំង <b> {{ $cus->nameen }} &nbsp; </b>  ថ្ងៃខែឆ្នាំកំណើត {{ formatDateKh($cus->dob) }} </span>
        <span class="s1">ប្រភេទសេវាកម្ម </span>
        <span class="ser_type">: {{ $ser_type->namekh }} </span>
        <span class="b1">នាមករណ៍ </span>
        <span class="brand">: <b>{{ $ser->brand_namekh }} {{ $ser->brand_nameen==''?'':'- '.$ser->brand_nameen }}  </b></span>
        <span class="a1">អាសយដ្ឋានអាជីវកម្ម</span>
        <span class="addr">
            : {{ $ser->home==''?'':'ផ្ទះលេខ'.$ser->home }}
              {{ $ser->street==''?'':'ផ្លូវ'.$ser->street }}
              {{ $ser->group==''?'':'ក្រុមទី'.$ser->group }}

            ភូមិ{{ $vil2->namekh }} សង្កាត់{{ $com2->namekh }} ក្រុងបាត់ដំបង ខេត្ដបាត់ដំបង។
        </span>
        <span class="t6">បណ្ណអនុញ្ញាតសេវាកម្មនេះមានសុពលភាពត្រឹម{{ $date_ex }}។</span>
        <span class="t7">មុនផុតកំណត់រយៈពេល១៥ថ្ងៃ អាជីវករត្រូវ មកដាក់សុំបន្តអាជីវកម្មនៅឆ្នាំបន្ទាប់។ </span>
        <input class="t8" value="{{ $date_kh }}" >
        <input type="text" value="ក្រុងបាត់ដំបង {{ $date_gen }}" class="t9">
        <span class="t10 font-head">អភិបាលក្រុង </span>

        <span class="t11">បញ្ជាក់៖ បណ្ណអនុញ្ញាតនេះត្រូវដាក់តាំង ឬ ព្យួរនៅកន្លែងទទួលភ្ញៀវ  </span>

    </div>



<script type="application/javascript">
    window.onafterprint = function () { window.close(); }
</script>

</body>
</html>