using System;

namespace ConsoleApp1
{
       class cau3
        {
            static void Main(string[] args)
            {
                A a1 = new A();
                a1.nhap();

            }
        class A
        {
            public void nhap()
            {
                int a;
                Console.Write("Nhập a:");
                a = Convert.ToInt32(Console.ReadLine());
                B b1 = new B();
                b1.KT(a);
            }
        }
        class B
        {
            public void KT(int so)
            {
                if (so % 2 == 0)
                    Console.WriteLine("{0} là số chẵn ", so);
                else
                    Console.WriteLine("{0} là số lẻ  ", so);
            }
        }
        class C
        {
            public void tinhtong()
            {
                string x;
                int y;
                x = "5";
                y = int.Parse(x) + 5;
                Console.Write("y=" + y);
                Console.ReadKey();
            }
        }


        }
      
  

 }