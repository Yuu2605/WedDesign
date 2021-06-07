using System;

namespace vonglap
{
    class Program
    {
        static void Main(string[] args)
        {
            //viết chương trình nhập vào 1 số nguyên a trong khoảng từ 5 tới 10
            int a;
            
            do
            {
                Console.WriteLine("Nhập a");
                a = Convert.ToInt32(Console.ReadLine());
            }
            while (a > 10 || a < 5);

            Console.ReadKey();
        }
    }
}
