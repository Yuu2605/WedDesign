#include<stdio.h>
#include<conio.h>
int main()
{ int n,a[50];
printf("Nhap vao so phan tu mang: ");
scanf("%d",&n);

printf("Nhap vao so phan tu mang: ");
for(int i=0;i<n;i++)
{
	printf("\n a[%d]= ",i);
	scanf("%d",&a[i]);
}
printf("mang sau khi nhao la: ");
for (int i=0;i<n;i++)
 printf("%3d",a[i]);
 
 float sd = 0;
 for (int i=0;i<n;i++)
 {
 	if(a[i]>0)
 	    sd = sd+a[i];
 }
 printf("\nTong cac phan tu vua nhap la: %f" ,sd);
 
 //sap xep giam dan
 for (int i=0;i<n-1;i++)
 {
 	for (int j=i-1;j<n;j++)
 	{
 		if (a[i]<a[j])
 		{
 			int tg = a [i];
 			a[i]=a[j];
 			a[j]=tg;
		 }
	 }
 }
 printf("\nDay sau khi sx giam dan la: ");
 for (int i = 0;i<n;i++)
 printf("%3d",a[i]);
 //trung binh cong chia het cho 5
float tong=0 ,tbc ,dem=0;
	for (int i=0;i<n;i++)
    	if (a[i]%5!= 0)
            {	
    			tong = tong + a[i];
    			dem = dem +1;
	       }
	tbc = tong/dem;
	printf("\nTrung binh cong cac phan tu chia het cho 5 la: %f",tbc);
 
 getch();
 return 0;
}
