package br.com.controller;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;




import br.com.grisecorp.beans.Categoria;
import br.com.grisecorp.dao.CategoriaDao;





import java.util.HashMap;
import java.util.List;
import java.util.ArrayList;
import java.util.Map;



@WebServlet(name = "Categoria", urlPatterns = {"/Categoria"})
public class CategoriaController  extends HttpServlet{

	
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;

	@Override
	protected void service(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		
		
		
		 String action  = request.getParameter("action");
		 
		 PrintWriter writer = response.getWriter();
		 if(action.toUpperCase().equals("SEARCH")){
			 
			 response.setContentType("text/html");
			 writer.print(Listar(request,  response));
		 }
		 else{
			 response.setContentType("application/json");
			 String objectToReturn = "";
			 String msg = "";
			 
			 try{
				 
			    if(action.toUpperCase().equals("INSERT")){
					inserir(request, response);
					msg ="Registro inserido com sucesso";
					
				}
				else if(action.toUpperCase().equals("EDIT")){
				   atualizar(request, response);	
				   msg ="Registro alterado com sucesso";
				}
                else if(action.toUpperCase().equals("DELETE")){
				   deletar(request, response);	
				   msg ="Registro deletado com sucesso";
				}
			    objectToReturn="{\"is_erro\": \"false\", \"msg\": \""+msg+"\" }";
				 
			 }
			 catch(Exception ex ){
				 
				 objectToReturn = "{\"is_erro\": \"true\", \"msg\": \""+ex.getMessage()+"\" }";
			 }
			 
			 
			 writer.print(objectToReturn);
		 }
		
		 
		
		
    
    
		
	}
	
	public String Listar(HttpServletRequest request, HttpServletResponse response){
		 List<Categoria> listaCategoria = new ArrayList<Categoria>();
		 int cont = 1; 
         String html ="";
         CategoriaDao<Categoria> dao = new CategoriaDao<Categoria>();
         
         html+= "<input type=\"hidden\" value=\"\" id=\"action\" name=\"action\" class=\'insert update
 delete acaotela\'>";
         html+= "<tr>";
	         html+= "<th width=\"48\">";
	         html+= "<a href=\"#\" onclick=\"getIncluir(this);\" class=\"bt_incluir\" title=\"Incluir\"
></a>";
	         html+=	"</th>";
	         html+=	 "<th width=\"80\"   align=\"center\">C�digo</th>";
	         html+=  "<th width=\"200\"  align=\"left\">Nome</th>";
	       
	      
         html+= "</tr>";
         html+= "<tr class=\"aux\" style=\"display:none;\" >";
         html+= "</tr>";
         html+= "<tr class=\"incluir\" style=\"display:none;\" >";
	         html+= "<td>";
	         html+= "<a title=\"Salvar\" onclick=\"if(Valida($('#action').val())){requestCrud(this,$('#action'
).val(),'Categoria','cadCategoria')}\" class=\"bt_salvar\" href=\"#\"></a>"; 
	         html+= "<a title=\"Cancelar\" onclick=\"cancelar(this,$('#action').val(),'tabeladoenca')\"
 class=\"bt_cancelar\" href=\"#\"></a>";
	         html+= "</td>";
	         html+= "<td align=\"center\"><input type=\"text\" style=\"width:70px;text-align:center;\" class
=\"insert\" id=\"codigo\" name=\"codigo\" /></td>";
	         html+= "<td><input type=\"text\" style=\"width:99%\" class=\"insert\" id=\"nome\" name=\"nome
\" /></td>";
	        
	        
         html+= "</tr>";
         
         dao.setCondicoes(getConditions(request, response));
         listaDoenca = dao.findAll();
		 
         for(Doenca row : listaDoenca)
         {
        	 
			 html += "<tr id=\"grid"+cont+"\">";
			 html += "<td width=\"48\">";
			 html += "<a title=\"Alterar\" onclick=\"getAlterar(this)\" class=\"bt_alterar\" href=\"#\"></a>"
;
			 html += "<a title=\"Excluir\" onclick=\"excluir(this,'Doenca')\" id=\""+row.getId_doenca() +"\" class
=\"bt_excluir\" href=\"#\"></a>";
    		  
			 html +="</td>";
			 html +="<td align=\"center\" width=\"80\"   value=\""+row.getId_categoria()+"\" class=\"textbox\"
 tipo=\"code\">"+ row.getId_categoria() +"</td>";
			 html +="<td width=\"200\" class=\"textbox\" value=\""+row.getNome()+"\" tipo=\"text\" >"+row.getNome
() +"</td>";
			
			 html +="</tr>";
        	 cont++; 
         }
		return html;
	}
	public Map<String,Object> getConditions(HttpServletRequest request, HttpServletResponse response){

		
		 Map<String,Object> condicoes  = new HashMap<String,Object>();
		 
		
		 if(!request.getParameter("nome_filtro").equals("")){
			 condicoes.put("nome",request.getParameter("nome_filtro") );
		 }
		 
		 
		 
		 return condicoes;
		
	}
	
	public void inserir(HttpServletRequest request, HttpServletResponse response){
		
		  Categoria categoria = new Categoria();
		 CategoriaDao<Categoria> dao = new CategoriaDao<Categoria>();
		 
		 
        if(!request.getParameter("nome").equals("")){
        	 categoria.setNome(request.getParameter("nome"));
		 }
         
         
		
		 dao.persist(categoria);
	}
    
	public void atualizar(HttpServletRequest request, HttpServletResponse response){
		 Categoria categoria = new Categoria();
		 CategoriaDao<Categoria> dao = new CategoriaDao<Categoria>();
		 
		 if(!request.getParameter("codigo").equals("")){
			 categoria.setId_categoria(Integer.parseInt(request.getParameter("codigo")));
		 }
         if(!request.getParameter("nome").equals("")){
        	 categoria.setNome(request.getParameter("nome"));
		 }
         
		 
         
       
		 dao.merge(categoria);
		 
		
	}
	
    public void deletar(HttpServletRequest request, HttpServletResponse response){
    	 Categoria categoria = new Categoria();
		 CategoriaDao<Categoria> dao = new CategoriaDao<Categoria>();
		 
		 
		 if(!request.getParameter("codigo").equals("")){
			 categoria.setId_categoria(Integer.parseInt(request.getParameter("codigo")));
		 }
		 
		 dao.remove(categoria);
		
	}
}