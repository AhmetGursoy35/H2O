<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H2O</title>
</head>
<link rel="stylesheet" type="text/css" href="H2O.css">
<p>Bu kodlarda yapılmak istenilen RFİD olan sistemlerde miktar belirleme ve RFİD'lere okutulan kartlarda miktar değişikliği yapılmak. <br>
Normal şartlarda C dilleri kullanılarak RFİD cihazları kodlanır sistem oluşturulur ve bir arayüze bağlanır. <br>
Burdaki kodlarda bağlanılan arayüz var.<br>
Bu sistem bir self-servis oto yıkama sisteminin geliştirilmiş arayüzüdür.(TR)
</p>
<body>

    <p>RFİD aracılığı ile id numarası ve müşteri adı veritabanından otomatik çekilir</p>
    <input id="kartNumarasi" class="input" placeholder="Kart Numarası"> 
    <br>
    <br>
    <input id="musteriAdi" class="input" placeholder="Müşteri Adı">
    <br>
    <br>
    <input id="kartBakiyesi" class="input" placeholder="0.00" value="0">
    <br>    <p>Butonlar aracılığı ile miktar belirlenip yükleme butonu sayesinde veritabanındaki miktar değiştirilir</p>
    <br>
    <br>
    <a href="log.php"><button type="button">Log Kayıtları</button></a>
    <p>Log kayıtları butonuyla veritabanından çekilen ve güncellenen bilgiler başka bir sayfada gözükür</p>
    <br>
    <button onclick="bakiyeyiGuncelle(5)">+5</button>
    <button onclick="bakiyeyiGuncelle(10)">+10</button>
    <button onclick="bakiyeyiGuncelle(20)">+20</button>
    <button onclick="bakiyeyiGuncelle(40)">+40</button>
    <button onclick="bakiyeyiGuncelle(50)">+50</button>
    <button onclick="bakiyeyiGuncelle(60)">+60</button>
    <button onclick="bakiyeyiGuncelle(70)">+70</button>
    <button onclick="bakiyeyiGuncelle(80)">+80</button>
    <button onclick="bakiyeyiGuncelle(90)">+90</button>
    <button onclick="bakiyeyiGuncelle(100)">+100</button>
    <button onclick="bakiyeyiGuncelle(200)">+200</button>
    <br><br>
    <hr><br>
    <button class="kb" onclick="bakiyeyiGuncelle(-5)">-5</button>
    <button class="kb" onclick="bakiyeyiGuncelle(-10)">-10</button>
    <button class="kb" onclick="bakiyeyiGuncelle(-15)">-15</button>
    <button class="kb" onclick="bakiyeyiGuncelle(-20)">-20</button>
    <button class="kb" onclick="bakiyeyiGuncelle(-25)">-25</button>
    <button class="kb" onclick="bakiyeyiGuncelle(-30)">-30</button>
    <button class="kb" onclick="bakiyeyiGuncelle(-35)">-35</button>
    <button class="kb" onclick="bakiyeyiGuncelle(-40)">-40</button>
    <button class="kb" onclick="bakiyeyiGuncelle(-45)">-45</button>
    <button class="kb" onclick="bakiyeyiGuncelle(-50)">-50</button>
    <button class="kb" onclick="bakiyeyiGuncelle(-100000)">Bakiyeyi Sıfırla</button>

    <script>
        function bakiyeyiGuncelle(miktar) {
            const bakiyeInput = document.getElementById('kartBakiyesi');
            let mevcutBakiye = parseFloat(bakiyeInput.value) || 0;
            let yeniBakiye = mevcutBakiye + miktar;
            if (yeniBakiye < 0) {
                yeniBakiye = 0;
            }
            bakiyeInput.value = yeniBakiye.toFixed(2);
        }
    </script>

<p>The purpose of these codes is to determine the amount in RFID-based systems and to update the amount on the cards scanned by RFIDs. <br>
Under normal circumstances, RFID devices are coded and systems are created using C languages, and these are connected to an interface.<br>
In these codes, there is a connected interface.<br>
This system is an advanced interface for a self-service car wash system. (ENG) </p>
  
</body>
</html>
