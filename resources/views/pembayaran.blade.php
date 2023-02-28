<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="/simpanbayar" method="post">
        @csrf

       <input type="hidden" value="{{$siswaByid->id_spp}}" name="id_spp">
        <label>NISN</label><input type="text" value="{{$siswaByid->nisn}}" name="nisn"><br>
        <label>Nominal bayar</label><input type="text" value="{{$siswaByid->nominal}}" name="nominal"><br>
        <label>Tahun</label><input type="text" value="{{$siswaByid->tahun}}" name="tahun"><br>
        <label>Tanggal</label><input type="date" name="tgl"><br>
        <label>Bulan</label><br>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <div id="boxes">
            <label><input type="checkbox" name="ENBApicks[]" value="januari" data-exval="{{$siswaByid->nominal}}">januari </label>
            <label><input type="checkbox" name="ENBApicks[]" value="februari" data-exval="{{$siswaByid->nominal}}"> februari</label>
            <label><input type="checkbox" name="ENBApicks[]" value="maret" data-exval="{{$siswaByid->nominal}}">maret </label>
            <label><input type="checkbox" name="ENBApicks[]" value="april" data-exval="{{$siswaByid->nominal}}">april </label>
            <label><input type="checkbox" name="ENBApicks[]" value="mei" data-exval="{{$siswaByid->nominal}}">mei</label>
            <label><input type="checkbox" name="ENBApicks[]" value="juni" data-exval="{{$siswaByid->nominal}}"> juni</label>
            <label><input type="checkbox" name="ENBApicks[]" value="juli" data-exval="{{$siswaByid->nominal}}">juli </label>
            <label><input type="checkbox" name="ENBApicks[]" value="agustus" data-exval="{{$siswaByid->nominal}}"> agustus</label>
            <label><input type="checkbox" name="ENBApicks[]" value="september" data-exval="{{$siswaByid->nominal}}">september </label>
            <label><input type="checkbox" name="ENBApicks[]" value="oktober" data-exval="{{$siswaByid->nominal}}"> oktober</label>
            <label><input type="checkbox" name="ENBApicks[]" value="november" data-exval="{{$siswaByid->nominal}}"> november</label>
            <label><input type="checkbox" name="ENBApicks[]" value="desember" data-exval="{{$siswaByid->nominal}}"> desember</label>

            <script>
            $(document).ready(function() {
                //Set a handler to catch clicking the check box
                $("#boxes input[type='checkbox']").click(function() {
                    var total = 0;
                    //lOOP THROUGH CHECKED
                    $("#boxes input[type='checkbox']:checked").each(function() {
                        //Update total
                        total += parseInt($(this).data("exval"), 10);
                    });
                    $("#hitung").text(total);
                     $('input[name="jumlah_bayar"]').val(total);
                });

            });
        </script>

        </div>



        <label>Jumlah Bayar</label><input type="text" name="jumlah_bayar" id="total"><br>
        <input type="submit" name="submit" value="submit">


        <!-- <div>Result: <span id="hitung"></span></div> -->
    </form>
<br><br>

</body>

</html>
