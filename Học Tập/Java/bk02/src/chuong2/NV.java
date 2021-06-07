package chuong2;

import java.util.Scanner;

public class NV extends doituong {
	private String bangcap;
	

	@Override
	public String toString() {
		return "NV [bangcap=" + bangcap + "]";
	}
	
	public String getBangcap() {
		return bangcap;
	}
	
	public void setBangcap(String bangcap) {
		this.bangcap=bangcap;
	}
	public NV() {}
	public NV(String hoten, String diachi, String email, String sdt, String bangcap ) {
		super(hoten,diachi,email,sdt);
		this.bangcap=bangcap;
	}
	public void NhapDL() {
		super.nhapDL();
		Scanner sc=new Scanner(System.in);
		System.out.println("Nhập bằng cấp");
		bangcap=sc.nextLine();
	}
	public void hienthi() {
		super.hienthi();
		System.out.println("bằng cấp"+ bangcap);
		
	}
 

	public static void main(String[] args) {
	// TODO Auto-generated method stub
        NV nv=new NV();
        nv.nhapDL();
        nv.hienthi();
	}

}
