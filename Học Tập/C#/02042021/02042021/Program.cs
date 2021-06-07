using System;

namespace _02042021
{
    class Program
    {
        static void Main(string[] args)
        {
            /*
            // viết chương trình in ra màn hình 100000 dòng xin chào 
            int dem = 0;
            do
            {
                Console.WriteLine("Xin chào bạn"+dem);
                dem++;
            }
            while (dem < 100000);
            */
            /*
            // viết chương trình nhập vào số nguyên và in kết quả ra màn hình
            int a, tong;
            tong = 0;
            
            do
            {
                Console.Write("Nhập một số bất kì :");
                a = Convert.ToInt16(Console.ReadLine());
                tong = tong + a;
            } while (a != 0);
            Console.WriteLine("Tổng số vừa nhập là " + tong);

            */

            /*// viếtchương trình in ra 10 dogf
            for (int i = 1; i <= 10; i++)
            Console.WriteLine("Yêu Nấm <3 <3 <3"); 
            */

            //n nhập từ bàn phím hoặc gán trướcq

            int tong, n;
            tong = 0;
            n = 10;

            for (int i = 1; i <= n; i++)
                tong = tong + i;
            Console.WriteLine("Tổng"+ tong);

            Console.ReadKey();
        }
    }
}
