using System;

namespace _05042021
{
    class Program
    {
        static void Main(string[] args)
        {
            String chon;
            Console.Write("Mời bạn chọn bài tâp :");
            chon = Console.ReadLine();
            switch (chon)
            {
                case "1":
                    baitap1 xyz = new baitap1();
                    xyz.Bt1();
                    break;
                case "2":
                    baitap2 abc = new baitap2();
                    abc.Bt2();
                    break;
                case "3":
                baitap3 obd = new baitap3();
                    obd.Bt3(); 
                        break;

                case "5":
                    baitap5 qw = new baitap5();
                    qw.Bt5();
                    break;
                case "11":
                    baitap11 qi = new baitap11();
                    qi.Bt11();
                    break;


                default:
                    Console.WriteLine("Chương trình hiện chưa có , hiện đang trong quá trình cập nhật");
                    break;

            }


        }
    }

    class baitap1
    {
        public void Bt1()
        {
            //khai báo biến
            string masv, hoten, diachi;
            Double dt1, dt2, tienganh, dtb;
            //nhập dữ liệu cho biến
            Console.Write("Nhập mã sinh viên:");
            masv = Console.ReadLine();
            Console.Write("Nhập họ tên sinh viên:");
            hoten = Console.ReadLine();
            Console.Write("Nhập địa chỉ sinh viên:");
            diachi = Console.ReadLine();
            Console.Write("Nhập mã điểm tin 1:");
            dt1 = Convert.ToDouble(Console.ReadLine());
            Console.Write("Nhập mã điểm tin 2:");
            dt2 = Convert.ToDouble(Console.ReadLine());
            Console.Write("Nhập mã điểm tiếng anh:");
            tienganh = Convert.ToDouble(Console.ReadLine());

            // tính điểm trung bình
            dtb = (dt1 + dt2 + tienganh) / 3;
            //in kết qủa ra màn hình
            Console.WriteLine("Bạn: {0} có điểm trung bình là:{1:0.00}", hoten, dtb);


        }

    }
    class baitap2
    {
        public void Bt2()
        {
            string macb;
            Double luongcoban, hesoluong, bhyt, bhxh, bhtn, thuclinh;
            Console.Write("Nhập mã cán bộ:");
            macb = Console.ReadLine();
            Console.Write("Nhập hệ số lương:");
            hesoluong = Convert.ToDouble(Console.ReadLine());
            Console.Write("Nhập Lương cơ bản:");
            luongcoban = Convert.ToDouble(Console.ReadLine());
            bhyt = 0.03 * luongcoban;
            bhxh = 0.15 * luongcoban;
            bhtn = 0.02 * luongcoban;

            //tính thực lĩnh
            thuclinh = luongcoban * hesoluong - bhyt - bhxh - bhtn;
            Console.WriteLine("số  lương của bạn là {0} ", thuclinh);

        }

    }
    class baitap3
    {
        public void Bt3()
        {
            int a, b, c, max, min;
            Console.Write("Nhập a");
            a = Convert.ToInt16(Console.ReadLine());
            Console.Write("Nhập b");
            b = Convert.ToInt16(Console.ReadLine());
            Console.Write("Nhập c");
            c = Convert.ToInt16(Console.ReadLine());
            max = min = a;

            //tìm max 
            if (max < b ) max = b;
            if (max < c) max = c;

            //tìm min
            if (min > b) min = b;
            if (min > c) min = c;

            Console.WriteLine("Max của 3 số {0}, {1}, {2} là: {3} ", a, b, c, max);
            Console.WriteLine("Min của 3 số {0}, {1}, {2} là: {3} ", a, b, c, min);

        }
    }
    class baitap5
    {
        public void Bt5()
        {
            int num1  ;
            Console.Write("Nhập n:");
            num1 = Convert.ToInt32(Console.ReadLine());
            if (num1 % 2 == 0)
                Console.WriteLine("{0} là số chẵn ", num1);
            else
                Console.WriteLine("{0} là số lẻ  ", num1);
            if (num1 >= 0)
                Console.WriteLine("{0} là số dương: ", num1);
            else
                Console.WriteLine("{0} là số âm:", num1);



        }
    }
    class baitap11
    {
        public void Bt11()
        {
            int[] a= new int[100] ;
            int i = 0;
            double tbc, tong;
            //nhập vaò mảng số nguyên đến khi gặp số 0 thì dừng
            do
            {
                Console.Write("Nhập số thứ {0}:", i);
                a[i] = Convert.ToInt32(Console.ReadLine());
                i++;
                tong = a[i - 1];
            } while (a[i-1] != 0);
            //tính trung bình cộng
            Console.WriteLine("Tổng của mảng là :" + tong);
            tbc = (double)tong / (double)(i);
            Console.WriteLine("Trung bình cộng của mảng là:" + tbc);


        }
    }
    class baitap16
    {
        public void Bt16()
        {
            int a, b, c;
            Double chuvi, dientich;
            Console.Write("Nhập cạnh a: ");
            a = Convert.ToInt32(Console.ReadLine());
            Console.Write("Nhập cạnh b: ");
            b = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Nhập cạnh c: ");
            c = Convert.ToInt32(Console.ReadLine());

            chuvi = a + b + c ;
            dientich =  


        }
    }
   
}
