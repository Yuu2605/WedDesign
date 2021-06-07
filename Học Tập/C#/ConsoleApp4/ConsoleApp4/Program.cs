using System;

namespace ConsoleApp4
{
    class Program
    {
        static void Main(string[] args)
        {
            //gọi tới hàm goi tên trong namespace test
            test.A.Hien_Ten();
            Console.ReadKey();

            int a, b, c, max, min;
            a = 5; b = 6; c = 0;
            //nhập a
            Console.Write("Nhập A=: ");
            a = Convert.ToInt16(Console.ReadLine());
            //nhập b
            Console.Write("Nhập B=: ");
            b = Convert.ToInt16(Console.ReadLine());
            //nhập c
            Console.Write("Nhập C=: ");
            c = Convert.ToInt16(Console.ReadLine());
            //tính Max
            max = a > b ? a : b;
            max = max > c ? max : c;
            Console.WriteLine("giá trị max  của ba  số {2} {3} {1} là={0} ", max, a, b, c);
            // tính minn
            min = a < b ? a : b;
            min = min > c ? c : min;
            Console.WriteLine("min=" + min);
            Console.ReadKey();

        }
    }
}
namespace test

{
    class A
    {
        public static void Hien_Ten()
        {
            Console.WriteLine("Hiện tên");
            Console.ReadKey();

        }


    }

}
