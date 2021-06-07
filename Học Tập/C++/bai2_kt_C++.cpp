#include<conio.h>
#include<stdio.h>
int main()
{
	int n,a[50];
	printf("Nhap vao so phan tu cua mang :");
	scanf("%d",&n);
	//nhap mang
	
	printf("Nhap vao cac phan tu cua mang:");
	for(int i=0;i<n;i++)
	{
		printf("\na[%d]=",i);
		scanf("%d",&a[i]);
	}
	//in mang
	
	printf("mang sau khi nhap la:");
	for(int i=0;i<n;i++)
	printf("%3d",a[i]);
	 //tinh tong
     float s = 0;
     for (int i=0;i<n;i++)
        s = s+a[i];
    printf("Tong cac phan tu cua mang: %f",s);
	//dem so phan tu
	
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
   
   //sap xep cac phan tu theo chieu tang dan
   
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
	  	  
   //trung binh cong chia cho 3

  float tong = a[0], tbc;
  int dem;
	for (int i=0;i<0;i++)
    	if (a[i] %2 != 0 && a[i] %3)
            {	
    			tong = tong +a[i];
    			dem = dem +1;
	       }
	       tbc = s/dem;
	printf("Trung binh cong la: %f", tbc);	      
	 
   //xoa phan tu
   
   void XoaCacPhanTu;
   (int a[], int &k, int pos){
   	if(k <= 0)
   	
	if(pos < 0)
	{
	   	pos = 0;
	}
	else if(pos >= k)
	{
	   	pos = k-1
	}
   }

	       
	getch();
	return 0;
}
