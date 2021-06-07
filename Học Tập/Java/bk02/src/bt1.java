import java.util.Scanner;

import chuong2.nhanvien;

public class bt1 {
	private String maNV,hoten,diachi,maphongban;
	private float hesoluong;
	private int hesochucv;

	public String getMaNV() {
		return maNV;
	}

	public void setMaNV(String maNV) {
		this.maNV = maNV;
	}

	public String getHoten() {
		return hoten;
	}

	public void setHoten(String hoten) {
		this.hoten = hoten;
	}

	public String getDiachi() {
		return diachi;
	}

	public void setDiachi(String diachi) {
		this.diachi = diachi;
	}

	public String getMaphongban() {
		return maphongban;
	}

	public void setMaphongban(String maphongban) {
		this.maphongban = maphongban;
	}

	public float getHesoluong() {
		return hesoluong;
	}

	public void setHesoluong(float hesoluong) {
		this.hesoluong = hesoluong;
	}

	public int getHesochucv() {
		return hesochucv;
	}

	public void setHesochucv(int hesochucv) {
		this.hesochucv = hesochucv;
	}

	@Override
	public String toString() {
		return "bt1 [maNV=" + maNV + ", hoten=" + hoten + ", diachi=" + diachi + ", maphongban=" + maphongban
				+ ", hesoluong=" + hesoluong + ", hesochucv=" + hesochucv + "]";
	}
	public void nhapDL() {                                     
		Scanner sc=new Scanner(System.in);                     
		System.out.println("Nhập mã nhân viên:");              
		maNV=sc.nextLine();                                    
		System.out.println("Nhập họ tên:");                    
		hoten=sc.nextLine();                                   
		System.out.println("Nhập quê quán:");                  
		diachi=sc.nextLine();                                 
		System.out.println(" Hệ số lương :");                       
		hesoluong=sc.nextFloat();                                     
		System.out.println("hệ số chức vụ :");                    
		hesochucv=sc.nextInt(); 
	}
	//tính lương
	public float luong() {
		final int luongcoban=1490000;
		float luong=0;
		luong=luongcoban*this.hesoluong+this.hesochucv;
		return luong;
	}
	

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		 nhanvien nv= new nhanvien();
		 nv.nhapDL();
		 nv.hienthi();

	}

}