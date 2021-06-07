using System;

namespace vonglapForeach
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] A = { 5, 6, 8, 3, 1, 10, 0 };
            int dem_c = 0;
            foreach (int x in A)
            {
                if (x % 2 == 0)
                    dem_c++; 
            }
            Console.Write("Tập hợp có {0} số chẵn  ",dem_c);
            Console.ReadLine();

            // bài tập veè nhà ( tạo 1 danh sách lớp đếm xemm có bao nhiêu người họ nguyễn , bao nhiêu người họ lê )
            // đếm xem có bao nhiêu người có ký tự "a" trong họ tên ( dùng foreach , compare để so sánh
        }
    }
}
