using System;

namespace ConsoleApp04012021
{
    class Program
    {
        private static string kpt;

        public static string String { get; private set; }

        static void Main(string[] args)
        {
            //nhập vào số hiện chữ từ 0->9
            /*            int a;
                        Console.Write("Nhập giá trị của a:");
                        a = Convert.ToInt16(Console.ReadLine());
                        switch(a)
                        {
                            case 0: Console.WriteLine("Bạn nhập số không "); break;
                            case 1: Console.WriteLine("Bạn nhập số một "); break;
                            case 2: Console.WriteLine("Bạn nhập số hai "); break;
                            case 3: Console.WriteLine("Bạn nhập số ba "); break;
                            case 4: Console.WriteLine("Bạn nhập số bốn "); break;
                            case 5: Console.WriteLine("Bạn nhập số năm "); break;
                            case 6: Console.WriteLine("Bạn nhập số sáu "); break;
                            case 7: Console.WriteLine("Bạn nhập số bảy "); break;
                            case 8: Console.WriteLine("Bạn nhập số tám "); break;
                            case 9: Console.WriteLine("Bạn nhập số chín "); break;
                            default: 
                                    Console.WriteLine("Bạn nhập số ngoài khoảng từ không tới chín ");break;                    
                        }
                    */
            //nhập vào bàn phím hai số sau đó lựa chọn phép tinh và đưa ra kết quả tương ứng

            int a, b;
            String = kpt;
            {

                Console.Write("Nhập giá trị của a");
                a = Convert.ToInt16(Console.ReadLine());
                Console.Write("Nhập giá trị của b");
                b = Convert.ToInt16(Console.ReadLine());
                // nhập kiểu phép tính
                Console.WriteLine("Mời bạn chọn kiểu phép tính thực hiện");
                Console.WriteLine("Nhấp + để thực hiện phép tính cộng");
                Console.WriteLine("Nhấp - để thực hiện phép tính trừ ");
                Console.WriteLine("Nhấp * để thực hiện phép tính nhân");
                Console.WriteLine("Nhấp / để thực hiện phép tính chia");
                kpt = Console.ReadLine();
                //lệnh switch để in kết quả

                switch (kpt)
                {
                    case "+": Console.WriteLine("In ra kết quả của biểu thức cộng a + baaa ={0} ", a + b); break;
                    case "-": Console.WriteLine("In ra kết quả của biểu thức trừ a - b ={0} ", a - b); break;
                    case "*": Console.WriteLine("In ra kết quả của biểu thức nhân a * b ={0} ", a * b); break;
                    case "/": Console.WriteLine("In ra kết quả của biểu thức chia a / b ={0} ", a / b); break;
                    default: Console.WriteLine("Không hiểu thao tác chọn"); break;
                }
            }

            Console.ReadKey();
        }
    }
}
