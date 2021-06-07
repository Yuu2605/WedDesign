using System;

namespace giaiptbac2
{
    class Program
    {
        static void Main(string[] args)
        {
            //khai báo biến

            double a, b, c, x1, x2, delta ; 

            Console.Write("Nhập giá trị của a:");
            a = Convert.ToDouble(Console.ReadLine());
            Console.Write("Nhập giá trị của b:");
            b = Convert.ToDouble(Console.ReadLine());
            Console.Write("Nhập giá trị của c:");
            c = Convert.ToDouble(Console.ReadLine());
            // xét a
            if (a == 0) Console.Write("Phương trình bậc nhất");
            if(a!=0)
            {
                delta = b *b - 4 * a * c;
                //xét delta
                if(delta>0)
                {
                    //tính nghiệm x1,x2
                    x1 = (-b + Math.Sqrt(delta)) / (2 * a);
                    x2 = (-b + Math.Sqrt(delta)) / (2 * a);
                    Console.WriteLine("x1={0:0.00},x2={1:0.00}", x1 , x2 );

                }
                if(delta == 0)
                {
                    // tính nghiệm kép
                    x1 = x2 = -b / (2 * a);
                    Console.WriteLine("x1={0:0.00},x2={1:0.00}", x1 , x2);
                }
                if(delta < 0)
                {
                    Console.WriteLine("Phương trình vô nghiệm");
                }
            }

           

            Console.ReadKey();






        }
    }
}
