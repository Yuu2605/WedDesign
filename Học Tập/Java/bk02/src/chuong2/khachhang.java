package chuong2;

import java.util.Scanner;

public class khachhang extends doituong {
	private String khachhang;
	

	@Override
	public String toString() {
		return "khachhang [khachhang=" + khachhang + "]";
	    }
		public String getKhachhang() {
			return khachhang;
		}
		public void setBangcap(String khachhang) {
			this.khachhang=khachhang;
		}
		public khachhang() {}
		public khachhang(String hoten, String diachi, String email, String sdt, String bangcap, String khachhang ) {
			super(hoten,diachi,email,sdt);
			this.khachhang=khachhang;
		}
		@SuppressWarnings("resource")
		public void NhapDL() {
			super.nhapDL();
			Scanner sc=new Scanner(System.in);
			System.out.println("Nhập khách hàng");
			khachhang=sc.nextLine();
		}
		public void hienthi() {
			super.hienthi();
			System.out.println("Loại khách"+ khachhang);
			
		}


	public static void main(String[] args) {
		
		// TODO Auto-generated method stub
		
		khachhang kh=new khachhang();
		kh.NhapDL();
		kh.hienthi();

	}

}
