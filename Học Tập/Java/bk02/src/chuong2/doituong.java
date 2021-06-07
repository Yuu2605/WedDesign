package chuong2;

import java.util.Scanner;

public class doituong { 
	private String hoten, doituong , diachi, email ,sdt;
	

	public String getHoten() {
		return hoten;
	}


	public void setHoten(String hoten) {
		this.hoten = hoten;
	}


	public String getDoituong() {
		return doituong;
	}


	public void setDoituong(String doituong) {
		this.doituong = doituong;
	}


	public String getDiachi() {
		return diachi;
	}


	public void setDiachi(String diachi) {
		this.diachi = diachi;
	}


	public String getEmail() {
		return email;
	}


	public void setEmail(String email) {
		this.email = email;
	}


	public String getSdt() {
		return sdt;
	}


	public void setSdt(String sdt) {
		this.sdt = sdt;
	}


	
	public doituong() {}
	
	
	
	@Override
	public String toString() {
		return "doituong [hoten=" + hoten + ", doituong=" + doituong + ", diachi=" + diachi + ", email=" + email
				+ ", sdt=" + sdt + "]";
	}


	public doituong(String hoten, String diachi, String email, String sdt ) {
		
		this.hoten=hoten;
				this.diachi=diachi;
				this.email=email;
				this.sdt=sdt;
	}
	//nhâp dựx liệu
	public void nhapDL() {                                     
		Scanner sc=new Scanner(System.in);                     
		System.out.println("Nhập họ tên:");              
		hoten=sc.nextLine();                                    
		System.out.println("Nhập địa chỉ:");                    
		diachi=sc.nextLine();                                   
		System.out.println("Nhập email:");                  
		email=sc.nextLine();                                 
		System.out.println("Nhập điện thoại :");                       
		sdt=sc.nextLine();      
	}	
		public void hienthi() {
			System.out.println("Họ tên"+this.hoten);
			System.out.println("Địa chỉ"+this.diachi);
			System.out.println("email"+this.email);
			System.out.println("số điện thoại"+this.sdt);
		}

	public static void main(String[] args) {
		// TODO Auto-generated method stub
      doituong a=new doituong();
      a.nhapDL();
      a.hienthi();
	}

}
