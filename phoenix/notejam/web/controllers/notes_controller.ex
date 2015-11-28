defmodule Notejam.NotesController do
  use Notejam.Web, :controller

  def index(conn, _params) do
    render conn, "index.html", title: "All notes (8)"
  end
end