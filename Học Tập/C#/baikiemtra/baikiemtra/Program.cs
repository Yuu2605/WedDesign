using System;

namespace baikiemtra
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
                    cau1 xyz = new cau1();
                    xyz.Causo1();
                    break;
                case "2":
                    cau2 abc = new cau2();
                    abc.Causo2();
                    break;
                case "3":
                    cau3 asJ = new cau3();
                    asJ.nhap();
                    break;
                case "3C":
                    C asK = new C();
                    asK.Tinhtong();
                    break;




                default:
                    Console.WriteLine("Chương trình hiện chưa có , hiện đang trong quá trình cập nhật");
                    break;


            }

        }
        class cau1
        {
            public void Causo1()
            {
                Console.Write("Mời bạn nhập tên :");
                String name = Console.ReadLine();
                Console.Write("Mời bạn nhập mã sinh viên :");
                String masv = Console.ReadLine();
                Console.Write("Mời bạn nhập ngày sinh :");
                String ngaysinh = Console.ReadLine();
                Console.Write("Mời bạn nhập tuổi :");
                String age = Console.ReadLine();
                Console.Write("Mời bạn nhập tên lớp :");
                String lop = Console.ReadLine();
                Console.WriteLine("Thông tin sinh viên:");
                Console.WriteLine("Tên: {0}", name);
                Console.WriteLine("Mã sinh viên: {0}", masv);
                Console.WriteLine("Ngày sinh: {0}", ngaysinh);
                Console.WriteLine("Tuổi: {0}", age);
                Console.WriteLine("Lớp: {0} ", lop);
            }
        }
        class cau2
        {
            private object kpt;

            public object String { get; private set; }

            public void Causo2()
            {
                int a, b;
                String = kpt;
                {

                    Console.Write("Nhập giá trị của a");
                    a = Convert.ToInt16(Console.ReadLine());
                    Console.Write("Nhập giá trị của b");
                    b = Convert.ToInt16(Console.ReadLine());
                    // nhập kiểu phép tính
                    Console.WriteLine("Mời bạn chọn kiểu phép tính thực hiện");
                    Console.WriteLine("Nhấp + để thực hiện phép tính cộng");
                    Console.WriteLine("Nhấp - để thực hiện phép tính trừ ");
                    Console.WriteLine("Nhấp * để thực hiện phép tính nhân");
                    Console.WriteLine("Nhấp / để thực hiện phép tính chia");
                    kpt = Console.ReadLine();
                    //lệnh switch để in kết quả

                    switch (kpt)
                    {
                        case "+": Console.WriteLine("In ra kết quả của biểu thức cộng a + b ={0} ", a + b); break;
                        case "-": Console.WriteLine("In ra kết quả của biểu thức trừ a - b ={0} ", a - b); break;
                        case "*": Console.WriteLine("In ra kết quả của biểu thức nhân a * b ={0} ", a * b); break;
                        case "/": Console.WriteLine("In ra kết quả của biểu thức chia a / b ={0} ", a / b); break;
                        default: Console.WriteLine("Không hiểu thao tác chọn"); break;
                    }
                }
            }
        }
    
        class cau3
        {
            public void nhap()
            {
                int num1;
                Console.Write("Nhập n:");
                num1 = Convert.ToInt32(Console.ReadLine());
                if (num1 % 2 == 0)
                    Console.WriteLine("{0} là số chẵn ", num1);
                else
                    Console.WriteLine("{0} là số lẻ  ", num1);
               

            }
        }
                    
       class C
        {
            public void Tinhtong()
            {
                string x;
                int y;
                x = "5";
                y = int.Parse(x) + 5;
                Console.Write("y=" + y);
                Console.ReadKey();

            }
        }
    }
    
}

  
