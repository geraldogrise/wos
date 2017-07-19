using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using Aplicacao.Models;
using Aplicacao.Dao;
using MySql.Data.MySqlClient;

namespace Aplicacao.Controllers
{
    public class CategoriaController : Controller
    {
        //
        // GET: /Categoria/

        public ActionResult Index()
        {
            return View();
        }
        
        [HttpPost]
        public ActionResult getLista_Categoria()
        {
            GenericDao<Categoria> dao = new GenericDao<Categoria>();


            Categoria model = new Categoria();
            MySqlDataReader retorno = dao.getAll(model);


            return View("GridView",retorno);
        }
        
        [HttpPost]
        public JsonResult insertCategoria(FormCollection form)
        {
            GenericDao<Categoria> dao = new GenericDao<Categoria>();
            String msg = "";

            try
            {
                Categoria model = new Categoria();

               
                if (!String.IsNullOrEmpty(form["nome"]))
                {
                    model.setNome(form["nome"]);
                }

                int retorno = dao.insert(model);

                msg = "Registro inserido com sucesso";
                return Json(new { is_erro = (bool)false, msg = msg });
            }
            catch (Exception e)
            {
                return Json(new { is_erro = (bool)true, msg = e.Message });
            }
        }


        [HttpPost]
        public JsonResult editCategoria(FormCollection form)
        {
            GenericDao<Categoria> dao = new GenericDao<Categoria>();
            String msg = "";
            
            try{
                Categoria model = new Categoria();
                
                if (!String.IsNullOrEmpty(form["codigo"]))
                {
                    model.setId_categoria(Convert.ToInt16(form["codigo"]));
                }
                if (!String.IsNullOrEmpty(form["nome"]))
                {
                    model.setNome(form["nome"]);
                }

                int retorno = dao.update(model);

                msg = "Registro atualizado com sucesso";

                return Json(new { is_erro = (bool)false, msg = msg });
            }
            catch (Exception e)
            {
                return Json(new { is_erro = (bool)true, msg = e.Message });
            }


           
        }

        [HttpPost]
        public JsonResult deleteCategoria(FormCollection form)
        {
            GenericDao<Categoria> dao = new GenericDao<Categoria>();
            String msg = "";

            try
            {
                Categoria model = new Categoria();

                if (!String.IsNullOrEmpty(form["codigo"]))
                {
                    model.setId_categoria(Convert.ToInt16(form["codigo"]));
                }
               
                dao.delete(model);


                msg = "Registro deletado com sucesso";
                return Json(new { is_erro = (bool)false, msg = msg });
            }
            catch (Exception e)
            {
                return Json(new { is_erro = (bool)true, msg = e.Message });
            }
        }

    }
}
