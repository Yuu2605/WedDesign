#include<stdio.h>
#include<conio.h>
int main()
{ int n,a[50];
printf("Nhap vao so phan tu mang: ");
scanf("%d",&n);

printf("Nhap vao so phan tu mang:");
for(int i=0;i<n;i++)
{
	printf("\n a[%d]= ",i);
	scanf("%d",&a[i]);
}
printf("mang sau khi nhao la: ");
for (int i=0;i<n;i++)
 printf("%3d",a[i]);
 
 float s = 0;
 for (int i=0;i<n;i++)
    s = s+a[i];
    printf("Tong cac phan tu cua mang: %f",s);

//cau a 
  float sa = 0;
  for (int i=0;i<n;i++)
  {
  	if(a[i]<0)
  	    sa = sa+a[i];
  }
  printf("\nTong cac tu am  la: %f",sa);
  
// cau c 
 float sl = 0;
 for (int i=0;i<n;i++)
  {
 if(a[i] % 2 != 0)
  	    sl = sl+a[i];
  	}
  	printf("\nTong cac tu le la: %f",sl);
  	//cau e 

      for (int i=0;i<n-1;i++)
      {
      	for (int j=i-1;j<n;j++)
      	{
      		if (a[i]<a[j])
      		{
      			int tg = a[i];
      			a[i]<a[j];
      			a[j]<tg;
			  }
		  }
	  }
	  printf("\nDay sau khi sx giam dan la: ");
	  for (int i=0;i<n;i++)
	  printf("%3d",a[i]);
	  
	  //cau d 
    float tong =a[0], tbc;
    int dem;
	for (int i=0;i<0;i++)
    	if (a[i] % 2 != 0 && a[i] %3)
            {	
    			tong = tong +a[i];
    			dem = dem +1;
	       }
	       tbc = s/dem;
	       printf("Trung binh cong chia het cho 3  la: %d",tbc);
//cau f	       
	  int min;
	  min = a[0];
	  for (int i=1;i<n;i++)
	  {
	  	if (a[i]<min)
	  	min = a[i];
	  }
	  printf("\nPhan tu nho nhat cua day la: %d",min);
   

getch();
return 0;
}

