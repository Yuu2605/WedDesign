using System;

namespace baitap1
{
    class Program
    {
        static void Main(string[] args)
        {
            //tính tổng
            string x;
            int y;
            x = "5";
            y = int.Parse(x) + 5;
            Console.Write("y=" + y);
            Console.ReadKey();
        }
    }
}

namespace tinhmax
{
    class A
    {
        public static void tinhmax()
        {
            int a, b, c, max;
            a = 10; b = 16;

            max = a > b ? a : b;
            max = max > b ? max : b;
            Console.WriteLine("giá trị max  của hai  số {2}  {1} là={0} ", max, a, b);
            Console.ReadKey();

        }
    }
    class B
    {
        public static void tinhmin()
        {
            int a, b, c, min;
            a = 10; b = 16;
            min = a < b ? a : b;
            min = min > b ? b : min;
            Console.WriteLine("giá trị min của hai  số {2}  {1} là={0} ", min, a, b);
            Console.ReadKey();
        }
    }
    class C
    {
        public static void tinhtich()
        {
            int a = int.Parse(Console.ReadLine());
            int b = int.Parse(Console.ReadLine());

            Console.WriteLine("a * b = " + (a * b));
        }
    }
}