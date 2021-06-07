using System;

namespace ConsoleApp2
{
    class Program
    {
        static void Main(string[] args)
        {
            string x;
            int y;
            x = "123";
            y = int.Parse(x) + 5;
            Console.Write("y=" + y);
            Console.ReadKey();

        }
    }
}
