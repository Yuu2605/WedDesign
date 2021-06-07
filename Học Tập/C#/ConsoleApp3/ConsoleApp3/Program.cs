using System;

namespace ConsoleApp3
{
    class Program
    {
        static void Main(string[] args)
        {
            int x,y;
            x = y = 10;
            int a = 0, b = 0, c = 0;
            a = x++;
            b = ++y;
            Console.WriteLine("a" + a);
            Console.WriteLine("b" + b);

            c = ++x + y++;

            Console.Write("x=" + x);
            Console.Write("y=" + y);
            Console.Write("c=" + c);
            Console.ReadKey();
          
        }
    }
}
