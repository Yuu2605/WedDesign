package Nguoi;

import java.util.Scanner;

import Nguoi.Yu01;

public class Yu01 {
	private String hoten,quequan;
	float tuoi;
	
	public String getHoten() {
		return hoten;
	}

	public void setHoten(String hoten) {
		this.hoten = hoten;
	}

	public float getTuoi() {
		return tuoi;
	}

	public void setTuoi(float tuoi) {
		this.tuoi = tuoi;
	}

	public String getQuequan() {
		return quequan;
	}

	public void setQuequan(String quequan) {
		this.quequan = quequan;
	}

	@Override
	public String toString() {
		return "Yu [hoten=" + hoten + ", tuoi=" + tuoi + ", quequan=" + quequan + "]";
	}
	
	public void nhapDL() {                                     
		Scanner sc=new Scanner(System.in);                     
		System.out.println("Họ tên sinh viên:");              
		hoten=sc.nextLine();    
		System.out.println("Nhập quê quán:");                  
		quequan=sc.nextLine(); 
		System.out.println("Nhập Tuổi:");                    
		tuoi=sc.nextInt();

	}
	public void hienthi() {
		System.out.println("họ tên"+this.hoten);
		System.out.println("Quê quán"+this.quequan);
		System.out.println("tuổi"+this.tuoi);
		
	
	}
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		 Yu01 nv= new Yu01();
		 nv.nhapDL();
		 nv.hienthi();
	}

}
