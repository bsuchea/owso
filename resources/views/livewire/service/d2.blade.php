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
            width: 800px;
            height: 1100px;
            background: url("/img/d2.png");
            background-repeat: no-repeat;
            background-size: 800px 1100px;
            margin-top: 25px;
        }
        .font-head{
            font-family: "Khmer OS Muol Light", "Khmer OS Muol";
        }
        span{
            position: absolute;
        }
.namekh {
    top: 245px;
    left: 160px;
}
.nameen {
    text-transform: uppercase;
    top: 242px;
    left: 456px;
}
.gender {
    top: 244px;
    left: 720px;
}
.dob {
    top: 272px;
    left: 127px;
}
.national {
    top: 272px;
    left: 315px;
}
.natid {
    top: 272px;
    left: 610px;
}
.phone {
    top: 300px;
    left: 545px;
}
.bus_type3 {
    top: 300px;
    left: 135px;
}
.bus_type {
    top: 218px;
    left: 295px;
}
.bus_type2 {
    top: 363px;
    left: 430px;
}

.brand_namekh {
    top: 555px;
    left: 195px;
}
.brand_nameen {
    top: 555px;
    left: 530px;
}
.ser_home {
    top: 423px;
    left: 563px;
}
.ser_street {
    top: 423px;
    left: 629px;
}
.ser_group {
    top: 423px;
    left: 735px;
}
.ser_village {
    top: 453px;
    left: 282px;
}
.ser_commune {
    top: 453px;
    left: 446px;
}
.namekh2 {
    top: 393px;
<<<<<<< HEAD
    left: 400px;
=======
    left: 370px;
>>>>>>> b93183729b9f8d7857cc45a6f9b9f159bc0f5478
}
.gender2 {
    top: 393px;
    left: 711px;
}
.brand {
    top: 1480px;
    left: 370px;
}
.t7, .t8 , .t9, .t10 {
    font-family: "Khmer", "Khmer OS Battambang", "Khmer OS Siemreap";
    position: absolute;
    font-size: 15px;
    border: none;
    background: none;
    text-align: center;
    width: 430px;
    height: 20px;
    left: 345px;
}
.t8{
    top: 840px;
}
.t9 {
    top: 868px;
}
.t7 {
    top: 893px;
    height: 25px;
}
.t10 {
    top: 990px;
    width: 230px;
    height: 25px;
    left: 500px;
}

@media print {

  @page {
      size: A4 portrait;
  }

}

    </style>
</head>
<body>
    <div id="p1">

        <span class="bus_type">{{ $ser->business_type }} </span>
        <span class="namekh">{{ $cus->namekh }} </span>
        <span class="nameen">{{ $cus->nameen }} </span>
        <span class="gender">{{ $cus->gender }}  </span>
        <span class="gender2">{{ $cus->gender }}  </span>
        <span class="dob">{{ formatDateKh($cus->dob,'d') }}-{{ formatDateKh($cus->dob,'mm') }}-{{ formatDateKh($cus->dob,'y') }} </span>
        <span class="national">{{ $cus->national }} </span>
        <span class="natid">{{ $cus->national_id }} </span>
        <span class="bus_type3">អាជីវកម្ម{{ $ser->business_type }} </span>
        <span class="phone">{{ $cus->phone }} </span>
        <span class="bus_type2">{{ $ser->business_type }} </span>

        <span class="namekh2">{{ $cus->namekh }} </span>
        <!-- <span class="brand_namekh">Gen Roger </span> -->
        <!-- <span class="brand_nameen">Gen Roger </span> -->
        <span class="ser_home">{{ $ser->home }}</span>
        <span class="ser_street">{{ $ser->street }}</span>
        <span class="ser_group">{{ $ser->group }}</span>
        <span class="ser_village">{{ $vil2->namekh }} </span>
        <span class="ser_commune">{{ $com2->namekh }} </span>
        <input class="t8" value="{{ $date_kh }}" >
        <input type="text" value="ក្រុងបាត់ដំបង {{ $date_gen }}" class="t9">
        <input type="text" value="មន្ដ្រីទទួលបន្ទុក" class="t7">

        <input type="text" value="សំរិទ្ធ សុគន្ធវារី" class="t10">

    </div>

    <script type="application/javascript">
        window.onload = function() { window.print(); }
    </script>
</body>
</html>
