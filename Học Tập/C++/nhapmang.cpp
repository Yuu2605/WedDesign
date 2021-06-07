
#include<stdio.h>
#include<conio.h>
int main()
{ int n,a[100];
printf("Nhap vao so phan tu mang: ");
scanf("%d",&n);
//nhap mang
printf("Nhap vao so phan tu mang:");
for(int i=0;i<n;i++)
{
	printf("\n a[%d]= ",i);
	scanf("%d",&a[i]);
}
//in mang
printf("mang sau khi nhao la: ");
for (int i=0;i<n;i++)
 printf("%3d",a[i]);
 //tinh tong
 float s = 0;
 for (int i=0;i<n;i++)
    s = s+a[i];
    printf("Tong cac phan tu cua mang: %f",s);
//tong duong
  float sd = 0;
  for (int i=0;i<n;i++)
  {
  	if(a[i]>0)
  	    sd = sd+a[i];
  }
 printf("\nTong cac tu duong la: %f",sd);
 //tong am 
  float sa = 0;
  for (int i=0;i<n;i++)
  {
  	if(a[i]<0)
  	    sa = sa+a[i];
  }
  printf("\nTong cac tu duong la: %f",sa);
  //so chan 
  float sc = 0;
  for (int i=0;i<n;i++)
  {
    if( a[i] % 2 != 0)
  	    sc = sc+a[i];
  	}
  	printf("\nTong cac tu duong la: %f",sc);
//so le
 float sl = 0;
 for (int i=0;i<n;i++)
  {
 if(a[i] % 2 != 0)
  	    sl = sl+a[i];
  	}
  	printf("\nTong cac tu duong la: %f",sl);
  	//tim phan tu max
  	int max;
  	max =a[0];
  	for (int i=1;i<n;i++)
  	{
  		if(a[i]>max)
  		max = a[i];
  	
	  }
	  printf("\nPhan tu lon nhat cua day la: %d",max);
	  //tim phan tu min
	  int min;
	  min=a[0];
	  for (int i=1;i<n;i++)
	  {
	  	if (a[i]<min)
	  	min = a[i];
	  }
	  printf("\nPhan tu nho nhat cua day la: %d",min);
      //sap xep tang dan
      for (int i=0;i<n-1;i++)
      {
      	for (int j=i+1;j<n;j++)
      	{
      		if (a[i]>a[j])
      		{
      			int tg = a[i];
      			a[i]=a[j];
      			a[j]=tg;
			  }
		  }
	  }
	  printf("\nDay sau khi sx tang dan la: ");
	  for (int i = 0;i<n;i++)
	  printf("%3d",a[i]);
	  //chia het cho 3
    float tong =a[0],tbc;
    int dem;
	for (int i=0;i<0;i++)
    	if (a[i] %2 != 0 && a[i] %3)
            {	
    			tong = tong +a[i];
    			dem=dem +1;
	       }
	       tbc = s/dem;
	       printf("Trung binh cong la: %f",tbc);
/*   //dem phan tu c
   int c, dem =0;
   int b[50];
   printf("Nhap phan tu c: ");
   scanf("%d",&c);
   int k=0;
   for (int i=0;i<n;i++)
   {
   	if(a[i]==c)
   	{
   		b[k] =i +1;
   		k= k+1;
   		dem = dem + 1;
	   }
   }
   printf("Phan tu %d xuat hien %d lan trong day",c,dem );
   printf("o cac vi tri:");
   for (int i=0;i<k;i++)
   printf("%3d",b[i]);
*/
getch();
return 0;
}
