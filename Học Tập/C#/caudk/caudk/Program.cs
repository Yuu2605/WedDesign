using System;

namespace caudk
{
    class Program
    {
        static void Main(string[] args)
        {
            //  int a, b, max;
            //  Console.Write("Nhập a=");
            //  a = Convert.ToInt32(Console.ReadLine());
            //  Console.Write("Nhập b=");
            //  b = Convert.ToInt32(Console.ReadLine());
            //  max = a;
            //  if (b <= max)
            //  {
            //      Console.WriteLine("Số lớn nhất là:" + a);
            //  }
            //  else
            //  {
            //      Console.WriteLine("số lớn nhất là:" + b);
            //  }
            int nongdocon;
            //Nhập thông tin nồng độ cồn của người vi phạm
            Console.WriteLine("Nhập nồng độ cồn ");
            nongdocon = Convert.ToInt16(Console.ReadLine());
            //kiểm tra để trả về kết quả
            if ( nongdocon <= 50)
                Console.WriteLine("Bạn bị phạt 1 triệu VNĐ ");
            else if(nongdocon<=100)
                Console.WriteLine("Bạn bị phạt 3 triệu VNĐ ");
            else if (nongdocon <= 150)
                Console.WriteLine("Bạn bị phạt 5 triệu VNĐ ");
            else
                Console.WriteLine("Bạn bị phạt 10 triệu VNĐ ");
            Console.ReadKey();

        }
    }
}
