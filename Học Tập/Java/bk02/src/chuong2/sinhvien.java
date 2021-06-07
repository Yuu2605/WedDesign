package chuong2;

import java.util.Scanner;

public class sinhvien {

	private String masv,hoten,quequan,lop,truong;
	private int namsinh;
	

	public String getMasv() {
		return masv;
	}


	public void setMasv(String masv) {
		this.masv = masv;
	}


	public String getHoten() {
		return hoten;
	}


				@Override
	public String toString() {
		return "sinhvien [masv=" + masv + ", hoten=" + hoten + ", quequan=" + quequan + ", lop=" + lop + ", truong="
				+ truong + ", namsinh=" + namsinh + ", getClass()=" + getClass() + ", hashCode()=" + hashCode()
				+ ", toString()=" + super.toString() + "]";
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
	
	
	public String getLop() {
		return lop;
	}


	public void setLop(String lop) {
		this.lop = lop;
	}


	public String getTruong() {
		return truong;
	}


	public void setTruong(String truong) {
		this.truong = truong;
	}


	public int getNamsinh() {
		return namsinh;
	}


	public void setNamsinh(int namsinh) {
		this.namsinh = namsinh;
	}

    //Hàm khởi tạo
	public sinhvien() {}
	//hàm khởi tạo có tham số
	public sinhvien(String masv,String hoten,String quequan,String lop,String truong,int namsinh) {
	this.masv =masv;
	this.hoten =hoten;
	this.quequan =quequan;
	this.lop =lop;
	this.truong =truong;
	this.namsinh =namsinh;
}
	public static void main(String[] args) {
		//sinhvien a= new sinhvien("SV1","Dũng Dz","HÀ NỘI","BK02","CDBK",2000);
				//a.hienthi();
				sinhvien sv=new sinhvien();
				sv.nhapDL();
				sv.hienthi();
		
				
	}
	public void hienthi() {
		System.out.println("Mã SV:"+this.masv);
		System.out.println("họ Tên:"+this.hoten);
		System.out.println("Quê Quán:"+this.quequan);
		System.out.println("Lớp:"+this.lop);
		System.out.println("Trường:"+this.truong);
		System.out.println("năm sinh:"+this.namsinh);
		
	}
	public void nhapDL() {
		Scanner sc=new Scanner(System.in);
		System.out.println("Nhập mã sinh viên:");
		masv=sc.nextLine();
		System.out.println("Nhập họ tên:");
		hoten=sc.nextLine();
		System.out.println("Nhập quê quán:");
		quequan=sc.nextLine();
		System.out.println("Nhập lớp:");
		lop=sc.nextLine();
		System.out.println("Nhập Trường:");
		truong=sc.nextLine();
		System.out.println("Nhập năm sinh:");
		namsinh=sc.nextInt();
		}
	

}