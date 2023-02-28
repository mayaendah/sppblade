<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
@if (session('alert'))
    <div style="color:red">
        {{ session('alert') }}
    </div>
@endif
    <form action="{{ route('updatebayar',$getEbayar->nisn) }}" method="post">
    @method('PUT')
    @csrf

        <input type="text" value="{{$getEbayar->id_spp}}" name="id_spp"><br>

        <label>NISN</label><input type="text" value="{{$getEbayar->nisn}}" name="nisn"><br>

        <label>Tahun</label><input type="text" value="{{$getEbayar->thn_bayar}}" name="tahun"><br>
        <label>Tanggal</label><input type="text" value="{{$getEbayar->tgl_bayar}}" name="tgl"><br>
        <label>Tanggal</label><input type="text" value="{{$getEbayar->jumlah_bayar}}" name="edit_bayar"><br>
        <label>Bulan</label><br>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <div id="boxes">
            <label><input type="checkbox" name="ENBApicks[]" value="januari" {{ in_array('januari', $splitbulan) ? 'checked' : '' }} data-exval="{{$getEbayar->nominal}}">januari </label>
            <label><input type="checkbox" name="ENBApicks[]" value="februari"  {{ in_array('februari', $splitbulan) ? 'checked' : '' }} data-exval="{{$getEbayar->nominal}}"> februari</label>
            <label><input type="checkbox" name="ENBApicks[]" value="maret" {{ in_array('maret', $splitbulan) ? 'checked' : '' }} data-exval="{{$getEbayar->nominal}}">maret </label>
            <label><input type="checkbox" name="ENBApicks[]" value="april" {{ in_array('april', $splitbulan) ? 'checked' : '' }} data-exval="{{$getEbayar->nominal}}">april </label>
            <label><input type="checkbox" name="ENBApicks[]" value="mei" {{ in_array('mei', $splitbulan) ? 'checked' : '' }} data-exval="{{$getEbayar->nominal}}">mei</label>
            <label><input type="checkbox" name="ENBApicks[]" value="juni" {{ in_array('juni', $splitbulan) ? 'checked' : '' }} data-exval="{{$getEbayar->nominal}}"> juni</label>
            <label><input type="checkbox" name="ENBApicks[]" value="juli" {{ in_array('juli', $splitbulan) ? 'checked' : '' }} data-exval="{{$getEbayar->nominal}}">juli </label>
            <label><input type="checkbox" name="ENBApicks[]" value="agustus" {{ in_array('agustus', $splitbulan) ? 'checked' : '' }} data-exval="{{$getEbayar->nominal}}"> agustus</label>
            <label><input type="checkbox" name="ENBApicks[]" value="september" {{ in_array('september', $splitbulan) ? 'checked' : '' }} data-exval="{{$getEbayar->nominal}}">september </label>
            <label><input type="checkbox" name="ENBApicks[]" value="oktober" {{ in_array('oktober', $splitbulan) ? 'checked' : '' }} data-exval="{{$getEbayar->nominal}}"> oktober</label>
            <label><input type="checkbox" name="ENBApicks[]" value="november" {{ in_array('november', $splitbulan) ? 'checked' : '' }} data-exval="{{$getEbayar->nominal}}"> november</label>
            <label><input type="checkbox" name="ENBApicks[]" value="desember" {{ in_array('desember', $splitbulan) ? 'checked' : '' }} data-exval="{{$getEbayar->nominal}}"> desember</label>

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
