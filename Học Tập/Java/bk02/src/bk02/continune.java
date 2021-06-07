package bk02;

public class continune {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int x = 5;
		while(x<=10) {
			System.out.println("Phần tử thứ 1:" +x);
			if(x==6)continue;
			System.out.println("Bạn đã nhập phần tử thứ:" +x);
			x--;
			
		}
		System.out.println(x);
		break;

	}

}
