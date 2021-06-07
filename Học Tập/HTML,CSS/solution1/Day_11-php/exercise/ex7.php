<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="exercise7.css"/> -->
    <style>
        .bg-green{
            background-color: green;
        }
        table {
            border: 1px solid black;
        }

        tr td {
          width: 30px;
          height: 30px;
          border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tbody>
                <?php for($i = 1; $i <= 10; $i++): ?> <!-- Tiến hành mở và đóng thẻ PHP ngay trên dòng -->
                    <tr>                                <!-- Do thẻ PHP ở trên đã đóng, viết HTML như bình thường -->
                    <?php for ($j = 1; $j <= 10; $j++): ?> <!-- Tương tự với dòng số 12 -->
                        <?php
                            $number = 10*($i-1)+$j;
                            if (isPrime($number)) {
                                echo "<td class='bg-green'>".$number."</td>";
                            }else{
                                echo "<td>".$number."</td>";
                            }
                        ?>
                    <?php endfor; ?>  <!-- Tương tự với dòng số 12 -->
                    </tr>
                <?php endfor; ?><!-- Tương tự với dòng số 12 -->
        </tbody>
    </table>
    <?php
        function isPrime($number)
        {
            // neu so do nho hon 2 thi do k phai so nguyen to
            if ($number<2) {
                return false;
            }
            // kiem tra tu 2 den sqrt cua so do, neu co chia het cho so nao thi do k phai so nguyen to
            for ($i=2; $i <= sqrt($number); $i++) { 
                if ($number % $i == 0) {
                    return false;
                }
            }
            // neu k chia het cho so nao thi do la so nguyen to
            return true;
        }
    ?>
</body>
</html>