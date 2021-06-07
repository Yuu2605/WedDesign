package Nguoi;

import java.util.Scanner;

public class yu02 extends Yu01 {
	private String maKH,muabuon;
	private int sl,gt;
	private int tienhang;
	



	
	public int getTienhang() {
		return tienhang;
	}

	public void setTienhang(int tienhang) {
		this.tienhang = tienhang;
	}

	public String getMaKH() {
		return maKH;
	}

	public int getGt() {
		return gt;
	}

	public void setGt(int gt) {
		this.gt = gt;
	}

	public void setMaKH(String maKH) {
		this.maKH = maKH;
	}

	public String getMuabuon() {
		return muabuon;
	}

	public void setMuabuon(String muabuon) {
		this.muabuon = muabuon;
	}

	public int getSl() {
		return sl;
	}

	public void setSl(int sl) {
		this.sl = sl;
	}

	

	@Override
	public String toString() {
		return "yu02 [maKH=" + maKH + ", muabuon=" + muabuon + ", sl=" + sl + ", gt=" + gt + ", tienhang=" + tienhang
				+ "]";
	}

	public yu02() {}
	public yu02(String maKH,String muabuon) {
		this.maKH=maKH;
		this.muabuon=muabuon;
	}
	public void nhapTT() {
		Scanner a=new Scanner(System.in);
		System.out.println("Nhập khách hàng");
		maKH=a.nextLine();
		System.out.println("Nhập lựa chọn mua");
		muabuon=a.nextLine();
		System.out.println("Nhập số lượng hàng mua");
		sl=a.nextInt();
		System.out.println("Nhập giá thành sản phẩm");
		gt=a.nextInt();
		
	}
	public void hienthi() {
		System.out.println("Mã khách hàng"+ this.maKH);
		System.out.println("Nhập lựa chọn mua"+ this.muabuon);
		System.out.println("Tiền hàng"+ this.tienhang());
	}
	public float tienhang() {

		float tienhang=0;
		tienhang=(float)0.9*(this.sl*this.gt);
		return tienhang;
	}
	
 


	public static void main(String[] args) {
		// TODO Auto-generated method stub
   yu02 d=new yu02();
   d.nhapTT();
   d.hienthi();
   d.tienhang();
	}

}
