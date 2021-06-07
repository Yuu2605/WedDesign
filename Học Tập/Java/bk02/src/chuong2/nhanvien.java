package chuong2;

import java.util.Scanner;

public class nhanvien {
	//khai báo thuộc tính
	private String maNV,hoten,quequan;
	private float hesoluong;
	private int phucap;

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
	
	public String getQuequan() {
		return quequan;
	}

	public void setQuequan(String quequan) {
		this.quequan = quequan;
	}

	public float getHesoluong() {
		return hesoluong;
	}

	public void setHesoluong(float hesoluong) {
		this.hesoluong = hesoluong;
	}

	public int getPhucap() {
		return phucap;
	}

	public void setPhucap(int phucap) {
		this.phucap = phucap;
	}
	

	
	
	@Override
	public String toString() {
		return "nhanvien [maNV=" + maNV + ", hoten=" + hoten + ", quequan=" + quequan + ", hesoluong=" + hesoluong
				+ ", phucap=" + phucap + "]";
	}

	public void nhapDL() {                                     
		Scanner sc=new Scanner(System.in);                     
		System.out.println("Nhập mã nhân viên:");              
		maNV=sc.nextLine();                                    
		System.out.println("Nhập họ tên:");                    
		hoten=sc.nextLine();                                   
		System.out.println("Nhập quê quán:");                  
		quequan=sc.nextLine();                                 
		System.out.println(" Hệ số lương :");                       
		hesoluong=sc.nextFloat();                                     
		System.out.println("Phụ cấp :");                    
		phucap=sc.nextInt();    
	}
	public void hienthi() {
		System.out.println("Mã Nv"+this.maNV);
		System.out.println("Họ Tên"+this.hoten);
		System.out.println("Quê quán"+this.quequan);
		System.out.println("Lương"+this.luong());
	}
	//tính lương
	public float luong() {
		final int luongcoban=1490000;
		float luong=0;
		luong=luongcoban*this.hesoluong+this.phucap;
		return luong;
	}
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
 nhanvien nv= new nhanvien();
 nv.nhapDL();
 nv.hienthi();
	}

}
