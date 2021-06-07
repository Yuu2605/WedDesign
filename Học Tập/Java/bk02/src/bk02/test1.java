package bk02;

import java.util.Scanner;

public class test1 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc=new Scanner(System.in);
		System.out.println("Số phần tử của mảng là:");
		int n=sc.nextInt();
		int []a=new int[n];
		for(int i=0; i<a.length; i++ )
		{
			System.out.println("a["+i+"]=");
			a[i]=sc.nextInt();
		}
		//xuất mảng
		//System.out.println("Xuất mảng có số phần tử là:"+a.length);
		//for(int i=0;i<a.length;i++)
		//{
			//System.out.println(a[i]);
		//}747	
		//tính tổng các phần tử trong mảng
		int s=0;
		for(int i=0; i<a.length; i++ )
		{
			s=s+a[i];
		}
		System.out.println("Tổng s:"+s);
		// sắp xếp
		int i, j;
		int min, temp;
		for ( i=0; i < a.length-1; i++ ) {
			min = i;
			for (j = i + 1; j < a.length; j++ ) {
				if (a[j] < a[min]) {
					min = j;
				temp = a[i];
				a[i] = a[min];
				a[min] = temp;
				}
			}
	}
	for(i=0;i<a.length;i++)
		System.out.println("Mảng sau khi sắp xếp là: "+ a[i]+"" );
	}
}
