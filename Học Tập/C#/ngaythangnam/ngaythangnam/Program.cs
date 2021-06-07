using System;

namespace ngaythangnam
{
    class Program
    {
        static void Main(string[] args)
        {
            //tạo  1 biến để nhập số năm , tháng

            int nam, thang;
            Console.Write("Nhập năm:");
            nam = Convert.ToInt16(Console.ReadLine());
            Console.Write("Nhập tháng:");
            thang = Convert.ToInt16(Console.ReadLine());
            switch (thang) { 
                case 1: Console.WriteLine("tháng 1 có 31 ngày"); break;
                case 2:
                    if (nam % 4 == 0)
                        Console.WriteLine("tháng 2 có 29 ngày");
                    else
                        Console.WriteLine("tháng 2 có 28 ngày");
                    break;
                case 3: Console.WriteLine("tháng 3 có 31 ngày"); break;
                case 4: Console.WriteLine("tháng 4 có 30 ngày"); break;
                case 5: Console.WriteLine("tháng 5 có 31 ngày"); break;
                case 6: Console.WriteLine("tháng 6 có 30 ngày"); break;
                case 7: Console.WriteLine("tháng 7 có 31 ngày"); break;
                case 8: Console.WriteLine("tháng 8 có 31 ngày"); break;
                case 9: Console.WriteLine("tháng 9 có 30 ngày"); break;
                case 10: Console.WriteLine("tháng 10 có 31 ngày"); break;
                case 11: Console.WriteLine("tháng 11 có 30 ngày"); break;
                case 12: Console.WriteLine("tháng 12 có 31 ngày"); break;
                default: Console.WriteLine("Nhập từ tháng 1 tới tháng 12 "); break;

            }
            Console.ReadKey();
        }
    }
}
