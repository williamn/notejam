defmodule Notejam.NotesController do
  use Notejam.Web, :controller

  def index(conn, _params) do
    logged_in = get_session(conn, :logged_in)
    if logged_in do
      render conn, "index.html", title: "All notes (8)", logged_in: logged_in
    else
      redirect conn, to: "/signup"
    end
  end
end