using System;

namespace câu_lệnh_vào_ra
{
    class Program
    {
        static void Main(string[] args)
        {
            String hoten;
            Console.Write("mời bạn nhập tên");
            hoten = Console.ReadLine();
            Console.WriteLine("****************************");
            Console.WriteLine("Xin chào bạn" + hoten);
            Console.ReadKey();

        }
    }
}
